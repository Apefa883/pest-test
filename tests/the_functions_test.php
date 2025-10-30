<?php

test('add_these', function () {
    $result = add_these_wrap(1, 1);
    expect($result)->toBe(2);
});

test('multiply_these', function () {
    $result = multiply_these_wrap(2, 3);
    expect($result)->toBe(6);
});


test('append_these', function () {
    $result = append_these_wrap(Skibidi, Sigma);
    expect($result)->toBe("Skibidi Sigma");
});

test('are_these_equal', function () {
    $result = are_these_equal_wrap(1, 1);
    expect($result)->toBe(2);
});
