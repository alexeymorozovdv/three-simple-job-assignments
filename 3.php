<?php

// Массив с числами, в которых нет повторяющихся цифр
$relevantNumbers = [];

for ($i = 0; $i <= 1000; $i++) {
    // Преобразуем число $i в строку, а потом разбиваем на элементы массива
    $numberArr = str_split(strval($i));

    if (count(array_unique($numberArr)) < count($numberArr)) {
        // Если массив с числом имеет повторяющиеся цифры,
        // то пропускаем текущую итерацию цикла
        continue;
    } else {
        // Если массив с числом не имеет повторов, то преобразуем его в строку,
        // потом в integer, а затем добавляем его в массив с "правильными" числами
        $relevantNumbers[] = intval(implode('', $numberArr));
    }
}

// Вывод суммы всех нужных нам чисел в массиве
echo "<strong>Результат:</strong> " . array_sum($relevantNumbers);

