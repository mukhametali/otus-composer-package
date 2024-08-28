Проверяет строку на палиндром

1. Сборка контейнера:
   **docker build -t palindrome-checker -f docker/Dockerfile .**
2. Запуск контейнера с volume: **docker run --rm -v $(pwd):/app palindrome-checker**