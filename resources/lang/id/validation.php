<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Validasi
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut berisi pesan kesalahan default yang digunakan oleh
    | kelas validator. Beberapa aturan memiliki beberapa versi seperti
    | aturan ukuran. Silakan modifikasi setiap pesan sesuai kebutuhan Anda.
    |
    */

    'accepted'             => ':attribute harus diterima.',
    'active_url'           => ':attribute bukan URL yang valid.',
    'after'                => ':attribute harus berupa tanggal setelah :date.',
    'alpha'                => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'           => ':attribute hanya boleh berisi huruf, angka, dan tanda hubung.',
    'alpha_num'            => ':attribute hanya boleh berisi huruf dan angka.',
    'array'                => ':attribute harus berupa sebuah array.',
    'before'               => ':attribute harus berupa tanggal sebelum :date.',
    'between'              => [
        'numeric' => ':attribute harus di antara :min dan :max.',
        'file'    => ':attribute harus di antara :min dan :max kilobyte.',
        'string'  => ':attribute harus di antara :min dan :max karakter.',
        'array'   => ':attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean'              => 'Kolom :attribute harus bernilai true atau false.',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'date'                 => ':attribute bukan tanggal yang valid.',
    'date_format'          => ':attribute tidak cocok dengan format :format.',
    'different'            => ':attribute dan :other harus berbeda.',
    'digits'               => ':attribute harus berupa :digits digit.',
    'digits_between'       => ':attribute harus di antara :min dan :max digit.',
    'distinct'             => 'Kolom :attribute memiliki nilai duplikat.',
    'email'                => ':attribute harus berupa alamat email yang valid.',
    'exists'               => ':attribute yang dipilih tidak valid.',
    'filled'               => 'Kolom :attribute wajib diisi.',
    'image'                => ':attribute harus berupa gambar.',
    'in'                   => ':attribute yang dipilih tidak valid.',
    'in_array'             => 'Kolom :attribute tidak ada di :other.',
    'integer'              => ':attribute harus berupa bilangan bulat.',
    'ip'                   => ':attribute harus berupa alamat IP yang valid.',
    'json'                 => ':attribute harus berupa string JSON yang valid.',
    'max'                  => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file'    => ':attribute tidak boleh lebih besar dari :max kilobyte.',
        'string'  => ':attribute tidak boleh lebih dari :max karakter.',
        'array'   => ':attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes'                => ':attribute harus berupa file bertipe: :values.',
    'min'                  => [
        'numeric' => ':attribute harus minimal :min.',
        'file'    => ':attribute harus minimal :min kilobyte.',
        'string'  => ':attribute harus minimal :min karakter.',
        'array'   => ':attribute harus memiliki minimal :min item.',
    ],
    'not_in'               => ':attribute yang dipilih tidak valid.',
    'numeric'              => ':attribute harus berupa angka.',
    'present'              => 'Kolom :attribute harus ada.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => 'Kolom :attribute wajib diisi.',
    'required_if'          => 'Kolom :attribute wajib diisi ketika :other adalah :value.',
    'required_unless'      => 'Kolom :attribute wajib diisi kecuali :other ada di :values.',
    'required_with'        => 'Kolom :attribute wajib diisi ketika :values ada.',
    'required_with_all'    => 'Kolom :attribute wajib diisi ketika :values ada.',
    'required_without'     => 'Kolom :attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => 'Kolom :attribute wajib diisi ketika tidak ada :values yang ada.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':attribute harus berukuran :size.',
        'file'    => ':attribute harus berukuran :size kilobyte.',
        'string'  => ':attribute harus berukuran :size karakter.',
        'array'   => ':attribute harus mengandung :size item.',
    ],
    'string'               => ':attribute harus berupa string.',
    'timezone'             => ':attribute harus berupa zona waktu yang valid.',
    'unique'               => ':attribute sudah digunakan.',
    'url'                  => 'Format :attribute tidak valid.',

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan
    | menggunakan konvensi "attribute.rule" untuk menamai baris. Ini memudahkan
    | untuk menentukan pesan khusus untuk aturan atribut tertentu.
    |
    */

    'custom' => [
    'nisn' => [
        'required' => 'Kolom NISN harus diisi.',
        'string' => 'Kolom NISN harus berupa string.',
        'size' => 'Kolom NISN harus :size angka.',
        'unique' => 'NISN sudah terpakai.',
    ],
    'nama_siswa' => [
        'required' => 'Kolom NAMA SISWA harus diisi.',
        'string' => 'Kolom NAMA SISWA harus berupa string.',
        'max' => 'Kolom NAMA SISWA tidak boleh lebih dari :max karakter.',
    ],
    'jenis_kelamin' => [
        'required' => 'Kolom JENIS KELAMIN harus diisi.',
        'in' => 'Kolom JENIS KELAMIN harus diisi L atau P.',
    ],
    'tanggal_lahir' => [
        'required' => 'Kolom TANGGAL LAHIR harus diisi.',
        'date' => 'Kolom TANGGAL LAHIR harus diisi format tanggal yang benar.',
    ],
    'id_kelas' => [
        'required' => 'Kolom kelas harus diisi',
    ],
],


    /*
    |--------------------------------------------------------------------------
    | Atribut Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk mengganti place-holder atribut
    | dengan sesuatu yang lebih ramah pembaca seperti "Alamat Email"
    | daripada "email". Ini membantu membuat pesan sedikit lebih bersih.
    |
    */

    'attributes' => [],

];
