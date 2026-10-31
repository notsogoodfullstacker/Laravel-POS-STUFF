<?php

public function up(): void
{
    Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email');
        $table->string('phone');
        $table->timestamps();
    });
}
