<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-8 space-y-5">
                <div class="border rounded-xl p-5">
                    @foreach ($statuses as $status)
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-3">
                            <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150"
                                alt="{{$status->user->name}}">
                        </div>
                        <div>
                            <div class="font-semibold">
                                {{$status->user->name}}
                            </div>
                            <div class="leading-relaxed">
                                {{$status->body}}
                            </div>
                            <div class="text-sm text-gray-500">
                                {{-- {{$status->created_at->format('d F,Y')}} --}}
                                {{$status->created_at->diffForHumans()}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-span-4">
                <div class="border p-5 rounded-xl space-y-5">
                    <h1 class="font-semibold mb-5">Your Recent Follows</h1>
                    @foreach (Auth::user()->follows()->limit(2)->get() as $user)
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-3">
                            <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150?u=fake@pravatar.com"
                                alt="{{$status->user->name}}">
                        </div>
                        <div>
                            <div class="font-semibold">
                               {{$user->name}}
                            </div>
                            <div class="text-sm text-gray-500">
                                {{$user->pivot->created_at->diffForHumans()}}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </x-container>

</x-app-layout>
