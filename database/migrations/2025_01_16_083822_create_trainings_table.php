Schema::create('trainings', function (Blueprint $table) {
    $table->id();
    $table->string('name'); // Nama pelatihan
    $table->text('description'); // Deskripsi pelatihan
    $table->decimal('price', 10, 2); // Harga pelatihan
    $table->timestamps();
});
