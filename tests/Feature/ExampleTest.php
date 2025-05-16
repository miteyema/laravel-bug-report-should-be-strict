<?php

use App\Models\User;
use Illuminate\Database\Eloquent\MissingAttributeException;

test('you cannot access an attribute that does not exist', function () {
    $this->expectException(MissingAttributeException::class);
    $user = new User();
    $user->access_attribute_that_does_not_exist;
});
