<x-default-layout title="Profile" section_title="Profile">
    <div>
        <div class="flex flex-col md:flex-row lg:w-1/2 w-full gap-6 p-4 bg-white border border-t-4 border-zinc-300 shadow col-span-3 md:col-span-2">
            <div class="flex flex-col gap-2">
                <div class="font-semibold">Name</div>
                <div class="px-3 py-2 border border-zinc-300">{{ $user->name }}</div>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-semibold">Email</div>
                <div class="px-3 py-2 border border-zinc-300">{{ $user->email }}</div>
            </div>
            <div class="flex flex-col gap-2">
                <div class="font-semibold">Role</div>
                <div class="px-3 py-2 border border-zinc-300">{{ $user->role }}</div>
            </div>
        </div>
        <form action="{{ route('auth.logout') }}" method="POST" class="self-end mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-50 border border-red-500 text-red-500 px-3 py-1 text-sm cursor-pointer rounded">Logout</button>
        </form>
    </div>
</x-default-layout>
