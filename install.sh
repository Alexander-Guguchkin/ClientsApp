#!/bin/bash

set -e

echo "🚀 Запуск установки проекта..."

composer install && \
npm install && \
npm run build && \
php artisan migrate && \
php artisan db:seed

echo "✅ Готово! Проект настроен."
