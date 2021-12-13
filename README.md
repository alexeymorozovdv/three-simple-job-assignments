# Три простых тестовых задания

## Задание 1

Дан массив

```
[
  [399, 9160, 144, 3230, 407, 8875, 1597, 9835],
  [2093, 3279, 21, 9038, 918, 9238, 2592, 7467],
  [3531, 1597, 3225, 153, 9970, 2937, 8, 807], 
  [7010, 662, 6005, 4181, 3, 4606, 5, 3980],
  [6367, 2098, 89, 13, 337, 9196, 9950, 5424],
  [7204, 9393, 7149, 8, 89, 6765, 8579, 55],
  [1597, 4360, 8625, 34, 4409, 8034, 2584, 2], 
  [920, 3172, 2400, 2326, 3413, 4756, 6453, 8],
  [4914, 21, 4923, 4012, 7960, 2254, 4448, 1]
]
```

Среди его ячеек некоторые числа являются простыми числами. Найдите сумму простых чисел в этом массиве.

## Задание 2

Задание на базе игры "Быки и коровы". Суть игры состоит в том, что ведущий загадывает четырехзначное число, а игрок
пытается его угадать. Игрок на каждом ходу сообщает ведущему свое предположение (четырехзначное число, тот в свою
очередь овтечает ему: "ты угадал столько-то букв, из них столько-то на своем месте").

Например: если ведущий загадал число 3810, а игрок предположил "0856", то ведущий должен ответить "угадал 2 цифры,
из них на своем месте 1 цифра". Итак задание: ваша программа является ведущим в этой игры. Загадно число "3810".
Программа должна последовательно вывести ответы на следующие числа: 2679, 1234, 5678, 0183, 3801, 3810. Каждый ответ
должен быть на новой строке и должен быть записан в формате "x-x", где первое число это количество совпавших цифр, а
второе — кол-во совпавших цифр, находящихся на своей позиции.

## Задание 3

Возьмите все числа от 1 до 1000 (включительно). Выбросьте из этой последовательности все числа, где одна и та же
цифра встречается более, чем 1 раз. Найдите сумму оставшихся чисел.
