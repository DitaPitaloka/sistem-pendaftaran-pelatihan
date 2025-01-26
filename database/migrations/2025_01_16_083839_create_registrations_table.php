Schema::create('registrations', function (Blueprint $table) {
    $table->id();
    $table->string('name'); // Nama peserta
    $table->string('email'); // Email peserta
    $table->string('phone'); // Nomor telepon
    $table->text('address'); // Alamat
    $table->json('selected_trainings'); // Pelatihan yang dipilih (disimpan sebagai JSON)
    $table->decimal('total_price', 10, 2); // Total harga pelatihan
    $table->timestamps();
});
