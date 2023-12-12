<div class="card dark:bg-zinc-800 dark:border-zinc-600">
    <div class="card-header border-b border-gray-50 p-5 dark:border-zinc-600">
        <h5 class="text-gray-600 dark:text-gray-100">Buat Petunjuk Penggunaan</h5>
    </div>
    <form class="form mb-3" method="post" action="{{route('petunjuk.store')}}">
        <div class="card-body">
            @csrf
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-12">
                    <div class="mb-4">
                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Judul</label>
                        <input class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" name="judul" id="example-text-input">
                    </div>
                    <div class="mb-4">
                        <label for="example-text-input" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Artikel</label>
                        <textarea name="artikel" id="ckeditor-classic" style="text-align: left;"></textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn bg-violet-500 border-transparent text-white hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Simpan</button>
            <button type="reset" class="btn border-red-500 text-red-500 hover:bg-red-500 hover:text-white focus:bg-red-500 focus:text-white focus:ring focus:ring-red-100">Batal</button>
        </div>
    </form>
</div>