<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        // get all the events for the authenticated user and return them as a paginated collection
        $events = (new Event())
            ->newQuery()
            ->getCurrentUserEvents()
            ->paginate(20);

        return response()->json([
            'status' => true,
            'data' => $events
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreEventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreEventRequest $request): JsonResponse
    {
        // add the current user id to the request data
        $request->merge([
            'user_id' => auth()->id()
        ]);

        // create the event for the authenticated user using the request data
        $event = (new Event())
            ->newQuery()
            ->create($request->all());

        return response()->json([
            'status' => true,
            'data' => $event
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Event $event
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Event $event): JsonResponse
    {
        // check if the authenticated user is the owner of the event
        if ($event->user_id !== auth()->id()) {
            return response()->json([
                'status' => false,
                'message' => 'You are not authorized to view this event'
            ], 403);
        }

        // return the event
        return response()->json([
            'status' => true,
            'data' => $event
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateEventRequest $request
     * @param \App\Models\Event $event
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateEventRequest $request, Event $event): JsonResponse
    {
        // check if the authenticated user is the owner of the event
        if ($event->user_id !== auth()->id()) {
            return response()->json([
                'status' => false,
                'message' => 'You are not authorized to update this event'
            ], 403);
        }

        // check if the current user has an event with the same date and time
        if ($event->hasEventWithSameDateAndTime($request, $event->id)) {
            return response()->json([
                'status' => false,
                'message' => 'You already have an event with the same date and time'
            ], 422);
        }

        // update the event using the request data
        $event->update($request->all());

        return response()->json([
            'status' => true,
            'data' => $event
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Event $event
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Event $event): JsonResponse
    {
        // delete the event
        $event->delete();

        return response()->json([
            'status' => true,
            'data' => $event
        ]);
    }
}
