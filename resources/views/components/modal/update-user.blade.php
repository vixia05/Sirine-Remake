@props(['name','listRole'])
<form>
    <x-modal.app-edit>
        <x-slot name="title">
            <span wire:model='name'>{{ $name }}</span>
        </x-slot>
        <div class="relative p-4 modal-body">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="np"
                        class="inline-block py-1 mb-2 font-medium text-center text-slate-800/90 dark:text-slate-100/90">Nomor
                        Pegawai</label>
                    <input type="text" maxlength="4" wire:model="np"
                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                        id="np" name="np" required>
                </div>
                <div class="flex flex-col">
                    <label for="nama"
                        class="inline-block py-1 mb-2 font-medium text-center text-slate-800/90 dark:text-slate-100/90">Nama</label>
                    <input type="text" maxlength="4"
                        class="w-full leading-tight border-slate-300 rounded-md bg-slate-300 text-slate-600 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                        id="name" name="name" wire:model="name" disabled>
                </div>
            </div>
            <div class="flex flex-col my-3">
                <label for="divisi"
                    class="inline-block py-1 font-medium text-center text-slate-800/90 dark:text-slate-100/90">Divisi</label>
                <input type="text" maxlength="4"
                    class="w-full leading-tight border-slate-300 rounded-md bg-slate-300 text-slate-600 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                    id="divisi" name="divisi" value="SBU Produk Non Uang" disabled>
            </div>
            <div class="flex flex-col justify-center mt-2">
                <label for="role"
                    class="inline-block py-1 font-medium text-center text-slate-800/90 dark:text-slate-100/90">Role</label>
                <select
                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100"
                    id="role" name="role" wire:model="role">
                    @foreach ($listRole as $role)
                        <option value="{{ $role->level }}">{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </x-modal.app-edit>
</form>
