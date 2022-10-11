<form>
    <!-- Back Shadow -->
    <div x-show="editModal" class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/30">
        <div x-show="editModal" @click.away="editModal = false" class="relative max-w-2xl rounded-2xl bg-slate-800 px-5 py-6 w-3/4">
            <div class="mb-3">
                <h3 class="border-b-2 pb-2 text-3xl text-slate-50"> EDIT PROFILE</h3>
            </div>
            <!-- Modal Content -->
            <div class="mb-2 grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label class="mb-1 text-slate-100/90">Nomor Pokok</label>
                    <input type="text" disabled value="{{ $userData->np_user }}"
                        class="appearance-none rounded bg-slate-500/40 py-0.5 px-2 text-slate-50 transition-all duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 ">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-slate-100/90">Nama</label>
                    <input type="text" value="{{ $userData->nama }}"
                        class="appearance-none rounded bg-slate-500/40 py-0.5 px-2 text-slate-50 transition-all duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40">
                </div>
            </div>
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-100/90">Contact</label>
                <input type="text" min="0" value=" {{ $userData->contact }}"
                    class="appearance-none rounded bg-slate-500/40 py-0.5 px-2 text-slate-50 transition-all duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40">
            </div>
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-100/90">E-Mail</label>
                <input type="text" value="{{ Auth::user()->email }}"
                    class="appearance-none rounded bg-slate-500/40 py-0.5 px-2 text-slate-50 transition-all duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40">
            </div>
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-100/90">Alamat</label>
                <textarea value="{{ $userData->alamat }}"
                    class="appearance-none rounded bg-slate-500/40 py-0.5 px-2 text-slate-50 transition-all duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40"></textarea>
            </div>
            <!-- Button Footer -->
            <div class="mt-7 flex justify-end">
                <button type="submit"
                    class="rounded-md bg-blue-600 px-2 py-1 text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Simpan</button>
            </div>
        </div>
    </div>
</form>
