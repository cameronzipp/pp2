<?php

    function printArr(array $numbers) {
        foreach ($numbers as $value) {
            echo "<p>" . $value . "</p>";
        }
    }

    function largest(array $numbers) {
        echo max($numbers);
    }
