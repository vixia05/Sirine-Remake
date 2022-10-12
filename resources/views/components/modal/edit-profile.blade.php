<form method="post" action="{{ route('profile.update',$userData->np_user) }}">
    @method('put')
    @csrf
    <!-- Back Shadow -->
    <div x-show="editModal" x-transition.opacity x-transition:leave.delay.300ms
        class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/30">
        <div x-show="editModal" x-transition.duration.350ms @click.away="editModal = false"
            class="relative w-3/4 max-w-2xl rounded-2xl bg-slate-100/80 px-6 py-10 backdrop-blur-lg backdrop-filter dark:bg-slate-800/90">
            {{-- 1. Header Modal --}}
            <div class="mb-3">
                <h3 class="border-b-2 dark:border-slate-100/80 border-slate-800/60 text-center pb-2 text-3xl text-slate-900/60 dark:text-slate-50">EDIT PROFILE</h3>
            </div>
            {{-- 2. Modal Content --}}
            <div class="mb-2 grid grid-cols-2 gap-4">
                {{-- 2.1 Input Nomor Pokok --}}
                <div class="flex flex-col">
                    <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Nomor Pokok</label>
                    <input type="text" disabled value="{{ $userData->np_user }}"
                        id="npUser" name="npUser"
                        class="appearance-none rounded border-none bg-zinc-400/60 py-1 px-2 text-center text-sm tracking-wide text-slate-600 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:bg-slate-500/20 dark:text-slate-400">
                </div>
                {{-- 2.2 Input Nama --}}
                <div class="flex flex-col">
                    <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Nama</label>
                    <input type="text" value="{{ $userData->nama }}"
                        id="namaUser" name="namaUser"
                        class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
                    @if($errors->has('namaUser'))
                    <div class="text-red-500 p-1 text-sm">{{ $errors->first('namaUser') }}</div>
                    @endif
                </div>
            </div>
            {{-- 2.3 Input Contact --}}
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Contact</label>
                <input type="text" min="0" value=" {{ $userData->contact }}"
                    id="contactUser" name="contactUser"
                    class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
                    @if($errors->has('contactUser'))
                    <div class="text-red-500 p-1 text-sm">{{ $errors->first('contactUser') }}</div>
                    @endif
                </div>
            {{-- 2.4 Input E-mail --}}
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">E-Mail</label>
                <input type="text" value="{{ Auth::user()->email }}"
                    id="emailUser" name="emailUser"
                    class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">
                    @if($errors->has('emailUser'))
                    <div class="text-red-500 p-1 text-sm">{{ $errors->first('emailUser') }}</div>
                    @endif
                </div>
            {{-- 2.5 Input Alamat --}}
            <div class="mb-2 flex flex-col">
                <label class="mb-1 text-slate-800/90 dark:text-slate-100/90">Alamat</label>
                <textarea
                    id="alamatUser" name="alamatUser"
                    class="appearance-none rounded border-slate-300 bg-zinc-300/60 py-1 px-2 text-sm tracking-wide text-slate-800 transition duration-150 ease-in-out focus:outline-double focus:outline-2 focus:outline-blue-500 focus:ring-2 focus:ring-blue-500/40 dark:border-slate-600 dark:bg-slate-500/40 dark:text-slate-100">{{ $userData->alamat }}</textarea>
            </div>
            <!-- Button Footer -->
            <div class="mt-7 flex justify-end">
                <button type="submit"
                    class="rounded-md bg-blue-600 px-2 py-1 text-sm tracking-wide text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Simpan</button>
            </div>
        </div>
    </div>
</form>
