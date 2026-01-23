# Структура папки `examples/`

Эта папка содержит примеры использования XHE API framework для работы с DOM, браузером и другими инструментами.

## Общая структура

```
examples/
├── DOM/                    # Примеры работы с DOM элементами
│   ├── README.md          # Документация по DOM примерам
│   ├── XHEAnchor/         # Примеры работы с якорями
│   ├── XHEForm/           # Примеры работы с формами
│   ├── XHEInterface/      # Интерфейсные примеры
│   ├── XHETable/          # Примеры работы с таблицами
│   └── XHETextArea/       # Примеры работы с текстовыми областями
│
├── System/                # Примеры работы с системными функциями
│   └── XHEExcelFile/     # Примеры работы с Excel файлами
│       ├── README.md          # Документация по Excel примерам
│       ├── TEST_EXECUTION_GUIDE.md  # Инструкции по выполнению тестов
│       ├── TEST_SUMMARY.md   # Сводка по тестированию
│       ├── FINAL_FINDINGS.md  # Результаты и рекомендации
│       ├── run_tests_with_backup.bat  # Скрипт для автоматического тестирования
│       └── [93 PHP файлов]  # Примеры работы с Excel
│
├── Tools/                 # Инструменты и утилиты
│
└── WEB/                   # Примеры работы с браузером и веб-функциями
    ├── README.md          # Документация по WEB примерам
    └── XHEBrowser/        # Примеры работы с браузером
        ├── add_tab.php
        ├── call_java_script.php
        ├── cancel_download.php
        ├── clear_cookies.php
        ├── clear_indexed_db.php
        ├── clear_last_messagebox_info.php
        ├── clear_local_storage.php
        ├── close.php
        ├── close_all_tabs.php
        ├── close_popup.php
        ├── disable_proxy.php
        ├── disable_script_error.php
        ├── disable_security_problem_dialogs.php
        ├── enable_activex.php
        ├── enable_browser_message_boxes.php
        ├── enable_browser_notification.php
        ├── enable_cache.php
        ├── enable_callback.php
        ├── enable_common_cache_and_cookies.php
        ├── enable_directx.php
        ├── enable_dom_storage.php
        ├── enable_download_file_dialog.php
        ├── enable_fonts.php
        ├── enable_frames.php
        ├── enable_gpu_rendering.php
        ├── enable_images.php
        ├── enable_isolate_tabs.php
        ├── enable_java.php
        ├── enable_java_script.php
        ├── enable_popup.php
        ├── enable_proxy.php
        ├── enable_quiet_regime.php
        ├── enable_remote_fonts.php
        ├── enable_sounds.php
        ├── enable_video.php
        ├── enable_view_json.php
        ├── enable_web_rtc.php
        ├── enable_web_socket.php
        ├── flash_cookies_delete.php
        ├── flash_cookies_restore.php
        ├── flash_cookies_save.php
        ├── get_active_browser.php
        ├── get_cache_folder.php
        ├── get_cookie.php
        ├── get_cookies_folder.php
        ├── get_cookie_for_url.php
        ├── get_count.php
        ├── get_cpu_class.php
        ├── get_current_proxy.php
        ├── get_download_info.php
        ├── ├── get_horizontal_scroll_pos.php
        ├── get_last_download_id.php
        ├── get_last_messagebox_caption.php
        ├── get_last_messagebox_text.php
        ├── get_last_messagebox_type.php
        ├── get_last_navigation_error.php
        ├── get_model.php
        ├── get_page_height.php
        ├── get_page_width.php
        ├── get_page_zoom.php
        ├── get_popup_source.php
        ├── get_ready_state.php
        ├── get_referer.php
        ├── get_selected_text.php
        ├── get_user_agent.php
        ├── get_version.php
        ├── get_vertical_scroll_pos.php
        ├── get_window_height.php
        ├── get_window_width.php
        ├── go_back.php
        ├── go_forward.php
        ├── import_cookies.php
        ├── is_busy.php
        ├── is_disable_script_error.php
        ├── is_download_complete.php
        ├── is_enable_activex.php
        ├── is_enable_cache.php
        ├── is_enable_callback.php
        ├── is_enable_common_cache_and_cookies.php
        ├── is_enable_dom_storage.php
        ├── is_enable_download_file_dialog.php
        ├── is_enable_frames.php
        ├── is_enable_images.php
        ├── is_enable_java.php
        ├── is_enable_java_script.php
        ├── is_enable_popup.php
        ├── is_enable_quiet_regime.php
        ├── is_enable_sounds.php
        ├── is_enable_video.php
        ├── is_enable_view_json.php
        ├── is_enable_web_rtc.php
        ├── is_enable_web_socket.php
        ├── navigate.php
        ├── navigate_to_home_page.php
        ├── paste.php
        ├── print_page.php
        ├── refresh.php
        ├── reset_default_authorization.php
        ├── reset_default_download.php
        ├── run_dojo.php
        ├── run_java_script.php
        ├── run_jquery.php
        ├── save_page_as.php
        ├── set_accept.php
        ├── set_accept_encoding.php
        ├── set_accept_language.php
        ├── set_active_browser.php
        ├── set_active_page.php
        ├── set_app_info.php
        ├── set_battery_api.php
        ├── set_blocked_chipers.php
        ├── set_cache_folder.php
        ├── set_canvas_toDataURL.php
        ├── set_cookie.php
        ├── set_cookies_folder.php
        ├── set_cookie_for_url.php
        ├── set_count.php
        ├── set_default_authorization.php
        ├── set_default_certificate.php
        ├── set_default_download.php
        ├── set_document_complete_java_script.php
        ├── set_do_not_track.php
        ├── set_geo.php
        ├── set_google_api_key.php
        ├── set_google_default_client_id.php
        ├── set_google_default_client_secret.php
        ├── set_hardware_info.php
        ├── set_height.php
        ├── set_home_page.php
        ├── set_horizontal_scroll_pos.php
        ├── set_init_java_script.php
        ├── set_internationalization.php
        ├── set_javascript_profile.php
        ├── set_language.php
        ├── set_model.php
        ├── set_page_zoom.php
        ├── set_permissions.php
        ├── set_platform.php
        ├── set_plugins_info.php
        ├── set_popup_type.php
        ├── set_random_audio_fingerprint.php
        ├── set_random_bounds_fingerprint.php
        ├── set_random_webgl_fingerprint.php
        ├── set_referer.php
        ├── set_screen_resolution.php
        ├── set_text_encoding.php
        ├── set_time_zone.php
        ├── set_touch_info.php
        ├── set_user_agent.php
        ├── set_vertical_scroll_pos.php
        ├── set_wait_params.php
        ├── set_webgl_alpha_buffer.php
        ├── set_webgl_antialiasing.php
        ├── set_webgl_depth_buffer.php
        ├── set_webgl_fail_if_major_performance_caveat.php
        ├── set_webgl_params.php
        ├── set_webgl_premultiplied_alpha.php
        ├── set_webgl_preserve_drawing_buffer.php
        ├── set_webgl_stencil_buffer.php
        ├── set_width.php
        ├── stop.php
        ├── wait.php
        ├── wait_download_and_get_file_path.php
        ├── wait_for.php
        └── wait_js.php
```

## Описание разделов

### DOM/
Содержит примеры работы с различными DOM элементами:
- **XHEAnchor** - работа с якорями (ссылками)
- **XHEForm** - работа с HTML формами
- **XHEInterface** - базовые интерфейсные операции
- **XHETable** - работа с таблицами, включая экспорт данных
- **XHETextArea** - работа с текстовыми областями (textarea)

### Tools/
Содержит дополнительные инструменты и утилиты для работы с XHE API.

### System/
Содержит примеры работы с системными функциями:
- **XHEExcelFile** - работа с Excel файлами (чтение, запись, форматирование, управление листами и ячейками)

### WEB/
Содержит примеры работы с браузером и веб-функциями:
- **XHEBrowser** - управление браузером, навигация, настройка параметров, работа с cookies, local storage, управление вкладками и многое другое

## Использование примеров

Каждый пример представляет собой PHP скрипт, который демонстрирует использование конкретного метода XHE API. Для запуска примеров необходимо:

1. Убедиться, что XHE API framework установлен и доступен
2. Настроить путь к `init.php` в начале каждого скрипта
3. Выполнить скрипт через сервер XHE

## Дополнительная информация

- Все примеры включают обязательные блоки инициализации и завершения работы
- Используется статический доступ к классам XHE без создания объектов
- Для проверки существования элементов используются методы `is_exist()` или проверка свойства `inner_number`

## Тестирование примеров XHEExcelFile

В директории `System/XHEExcelFile` создана полная инфраструктура для тестирования всех 93 примеров работы с Excel:

- **TEST_EXECUTION_GUIDE.md** - Подробные инструкции по выполнению тестов
- **run_tests_with_backup.bat** - Автоматизированный скрипт для запуска всех тестов с механизмом бэкапа/восстановления
- **TEST_RESULTS.md** - Автоматически генерируемые результаты тестирования
- **TEST_SUMMARY.md** - Сводка по всем тестам
- **FINAL_FINDINGS.md** - Детальные результаты и рекомендации
- **TASK_COMPLETION_SUMMARY.md** - Итоговый отчет о выполнении задачи

Для запуска автоматического тестирования всех примеров Excel выполните:
```batch
cd examples/System/XHEExcelFile
run_tests_with_backup.bat
```

Скрипт автоматически:
1. Создаст бэкап тестового файла `test/test.xlsx`
2. Выполнит каждый PHP файл
3. Восстановит оригинальный файл после каждого теста
4. Сгенерирует подробный отчет в формате Markdown