# Palindrome Checker

### Описание
Класс `PalindromeChecker` проверяет, является ли заданная строка палиндромом. Игнорируются пробелы, знаки препинания и регистр символов.

### Запуск
1. Сборка контейнера:
```bash
   docker build -t palindrome-checker -f docker/Dockerfile .
```
2. Запуск контейнера с volume:
```bash
docker run --rm -v $(pwd):/app palindrome-checker
```

### Пример использование
1. Пишем код в исходнике
```php 
$checker = new PalindromeChecker();
$string = "A man, a plan, a canal, Panama";
echo $checker->isPalindrome($string) ? "Palindrome" : "Not a palindrome";
echo PHP_EOL;
```
2. Вывод такой:
```bash
Palindrome or Not a palindrome
```

