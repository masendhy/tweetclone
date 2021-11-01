<x-app-layout>
    <div class="-mt-8 py-11">
        <x-container>
            <div class="flex items-center">
                <div class="flex-shrink-0 mr-3">
                    <img src="https://i.pravatar.cc/150" class="rounded-full w-14 h-14 border-2 border-indigo-300 p-1"
                        alt="{{$user->name}}">
                </div>
                <div class="px-3">
                    <h1 class="font-semibold mb-3">
                        {{$user->name}}
                    </h1>
                    <div class="text-sm text-gray-500">
                        Joined {{$user->created_at->diffForHumans()}}
                    </div>
                </div>
            </div>
        </x-container>
    </div>
    <div >
        <x-container>
            <div class="flex border-b ">
                <div>
                    <div class="px-10 py-2 font-semibold text-center ">
                        <div class="text-2xl">{{$user->statuses->count()}}</div>
                        <div class="uppercase text-xs text-gray-500">Status</div>
                    </div>
                </div>
                <div>
                    <div class="px-10 py-2 font-semibold text-center ">
                        <div class="text-2xl">{{$user->follows->count()}}</div>
                        <div class="uppercase text-xs text-gray-500">Following</div>
                    </div>
                </div>
                <div>
                    <div class="px-10 py-2 font-semibold text-center">
                        <div class="text-2xl">{{Auth::user()->followers->count()}}</div>
                        <div class="uppercase text-xs text-gray-500">Followers</div>
                    </div>
                </div>
            </div>
        </x-container>
    </div>

   {{-- status --}}
    <x-container>
<div class="grd-cols-2 py-3">
    <div>
        <div class=" p-5">
            @foreach ($statuses as $status)
            <div class="border rounded-xl p-5 mb-3">
                <div class="flex items-center">
                    <div class="flex-shrink-0 mr-3">
                        <img class="w-10 h-10 rounded-full border-2 border-indigo-300 p-1 " src="https://i.pravatar.cc/150"
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
            </div>
            @endforeach
        </div>
    </div>
</div>

    </x-container>

</x-app-layout>
