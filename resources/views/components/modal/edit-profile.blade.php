<form method="post" action="{{ route('profile.update',$userData->np_user) }}">
    @method('put')
    @csrf
    <!-- Back Shadow -->
    <div x-show="editModal" x-transition.opacity x-transition:leave.delay.300ms
        class="fixed inset-0 z-[2000] flex flex-col items-center justify-center bg-black/30">
        <div x-show="editModal" x-transition.duration.350ms @click.away="editModal = false"
            class="relative w-3/4 max-w-2xl px-8 py-4 rounded-lg  bg-gradient-to-br from-slate-50 via-slate-100 to-slate-50 dark:backdrop-blur-sm dark:backdrop-filter dark:bg-slate-800 dark:from-transparent dark:to-transparent dark:bg-opacity-70">
            {{-- 1. Header Modal --}}
            <div class="mb-3">
                <h3 class="text-center pt-5 pb-3 mb-6 text-xl font-bold border-b-2 border-slate-600 text-slate-600 dark:border-slate-100 dark:text-slate-100">EDIT PROFILE</h3>
            </div>
            {{-- 2. Modal Content --}}
            <div class="mb-2 grid grid-cols-2 gap-4">
                {{-- 2.1 Input Nomor Pokok --}}
                <div class="flex flex-col">
                    <label class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Nomor Pokok</label>
                    <input type="text" disabled value="{{ $userData->np_user }}"
                        id="npUser" name="npUser"
                        class="w-full leading-tight border-slate-300 rounded-md bg-slate-300 text-slate-600 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                </div>
                {{-- 2.2 Input Nama --}}
                <div class="flex flex-col">
                    <label class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Nama</label>
                    <input type="text" value="{{ $userData->nama }}"
                        id="namaUser" name="namaUser"
                        class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                    @if($errors->has('namaUser'))
                    <div class="text-red-500 p-1 text-sm">{{ $errors->first('namaUser') }}</div>
                    @endif
                </div>
            </div>
            {{-- 2.3 Input Contact --}}
            <div class="mb-2 flex flex-col">
                <label class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Contact</label>
                <input type="text" min="0" value=" {{ $userData->contact }}"
                    id="contactUser" name="contactUser"
                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                    @if($errors->has('contactUser'))
                    <div class="text-red-500 p-1 text-sm">{{ $errors->first('contactUser') }}</div>
                    @endif
                </div>
            {{-- 2.4 Input E-mail --}}
            <div class="mb-2 flex flex-col">
                <label class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">E-Mail</label>
                <input type="text" value="{{ Auth::user()->email }}"
                    id="emailUser" name="emailUser"
                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">
                    @if($errors->has('emailUser'))
                    <div class="text-red-500 p-1 text-sm">{{ $errors->first('emailUser') }}</div>
                    @endif
                </div>
            {{-- 2.5 Input Alamat --}}
            <div class="mb-2 flex flex-col">
                <label class="inline-block py-1 font-medium text-slate-600 dark:text-slate-200">Alamat</label>
                <textarea rows="4"
                    id="alamatUser" name="alamatUser"
                    class="w-full leading-tight border-slate-400/60 rounded-md text-slate-600 hover:border-blue-500 transition duration-300 ease-in-out focus:ring-blue-500/80 dark:bg-slate-600 dark:bg-opacity-60 dark:text-slate-100">{{ $userData->alamat }}</textarea>
            </div>
            <!-- Button Footer -->
            <div class="mt-7 flex justify-end">
                <button type="submit"
                    class="rounded-md bg-blue-600 px-2 py-1 text-sm tracking-wide text-blue-50 shadow-lg shadow-blue-600/30 brightness-125">Simpan</button>
            </div>
        </div>
    </div>
</form>
