# XHEWindowsShell Examples Implementation Plan

This document outlines the plan for updating all example files in the `examples/Window/XHEWindowsShell` directory according to the specified rules.

## Rules to Apply:
1. Add "Scenario:" comment at the beginning of each file
2. Update initialization code according to `.roo/rules/init_code-rule.md`
3. Extract all method arguments into separate variables
4. Replace `<br>` with `\n` for new lines
5. Translate all text to English
6. Update XHE API object calls to use static classes (e.g., `$windows` becomes `WINDOW::$windows`)
7. Add example numbers to logs and comments, distinguishing between "main method" examples and preparatory "steps"
8. For methods returning a boolean, output information about success or failure

## Files to Process:

### 1. get_computer_name.php
- Add scenario: "Get the name of the local computer"
- Update initialization code
- Translate comments to English
- Change `$windows->get_computer_name()` to `WINDOW::$windows->get_computer_name()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 2. get_cpu_name.php
- Add scenario: "Get the name of the CPU installed on the computer"
- Update initialization code
- Translate comments to English
- Change `$windows->get_cpu_name()` to `WINDOW::$windows->get_cpu_name()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 3. get_disk_free_space.php
- Add scenario: "Get free disk space for specified drives"
- Update initialization code
- Translate comments to English
- Extract drive letters into variables
- Change `$windows->get_disk_free_space()` to `WINDOW::$windows->get_disk_free_space()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 4. get_screen_height.php
- Add scenario: "Get the screen height and width"
- Update initialization code
- Translate comments to English
- Change `$windows->get_screen_height()` and `$windows->get_screen_width()` to `WINDOW::$windows->...`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 5. get_screen_width.php
- Add scenario: "Get the screen width for different monitors"
- Update initialization code
- Translate comments to English
- Extract monitor numbers into variables
- Change `$windows->get_screen_width()` and `$windows->get_screen_height()` to `WINDOW::$windows->...`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 6. get_screen_zoom.php
- Add scenario: "Get the screen zoom level for different monitors"
- Update initialization code
- Translate comments to English
- Extract monitor numbers into variables
- Change `$windows->get_screen_zoom()` to `WINDOW::$windows->get_screen_zoom()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 7. get_special_folder.php
- Add scenario: "Get paths to Windows special folders"
- Update initialization code
- Translate comments to English
- Extract folder names into variables
- Change `$windows->get_special_folder()` to `WINDOW::$windows->get_special_folder()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 8. get_system_date.php
- Add scenario: "Get the current system date"
- Update initialization code
- Translate comments to English
- Change `$windows->get_system_date()` to `WINDOW::$windows->get_system_date()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 9. get_system_time.php
- Add scenario: "Get the current system time"
- Update initialization code
- Translate comments to English
- Replace `<br>` with `\n`
- Change `$windows->get_system_time()` to `WINDOW::$windows->get_system_time()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 10. get_time_zone.php
- Add scenario: "Get time zone information"
- Update initialization code
- Translate comments to English
- Extract parameter into variable
- Change `$windows->get_time_zone()` to `WINDOW::$windows->get_time_zone()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 11. get_user_name.php
- Add scenario: "Get the name of the logged-in Windows user"
- Update initialization code
- Translate comments to English
- Change `$windows->get_user_name()` to `WINDOW::$windows->get_user_name()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 12. get_windows_build.php
- Add scenario: "Get the current Windows build number"
- Update initialization code
- Translate comments to English
- Change `$windows->get_windows_build()` to `WINDOW::$windows->get_windows_build()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 13. get_windows_platform_id.php
- Add scenario: "Get the Windows platform identifier"
- Update initialization code
- Translate comments to English
- Change `$windows->get_windows_platform_id()` to `WINDOW::$windows->get_windows_platform_id()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 14. get_windows_sp_info.php
- Add scenario: "Get Windows Service Pack information"
- Update initialization code
- Translate comments to English
- Change `$windows->get_windows_sp_info()` to `WINDOW::$windows->get_windows_sp_info()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 15. get_windows_title.php
- Add scenario: "Get the Windows title/name"
- Update initialization code
- Translate comments to English
- Change `$windows->get_windows_title()` to `WINDOW::$windows->get_windows_title()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 16. get_windows_version.php
- Add scenario: "Get the Windows version"
- Update initialization code
- Translate comments to English
- Change `$windows->get_windows_version()` to `WINDOW::$windows->get_windows_version()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 17. keep_alive.php
- Add scenario: "Reset monitor turn-off and sleep mode timers"
- Update initialization code
- Translate comments to English
- Add success/failure output for boolean return
- Change `$windows->keep_alive()` to `WINDOW::$windows->keep_alive()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 18. logoff.php
- Add scenario: "Log off the current Windows session"
- Update initialization code
- Translate comments to English
- Add success/failure output for boolean return
- Change `$windows->logoff()` to `WINDOW::$windows->logoff()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 19. restart.php
- Add scenario: "Restart the computer"
- Update initialization code
- Translate comments to English
- Add success/failure output for boolean return
- Change `$windows->restart()` to `WINDOW::$windows->restart()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 20. screenshot.php
- Add scenario: "Take screenshots of the desktop or specific regions"
- Update initialization code
- Translate comments to English
- Extract all parameters into variables
- Replace `<br>` with `\n`
- Change `$windows->screenshot()` to `WINDOW::$windows->screenshot()`
- Change `$app->shell_execute()` to `WINDOW::$app->shell_execute()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 21. set_screen_resolution.php
- Add scenario: "Change the screen resolution"
- Update initialization code
- Translate comments to English
- Extract resolution parameters into variables
- Replace `<br>` with `\n`
- Add success/failure output for boolean return
- Change `$windows->get_screen_width()`, `$windows->get_screen_height()`, and `$windows->set_screen_resolution()` to `WINDOW::$windows->...`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 22. set_system_date.php
- Add scenario: "Change the system date"
- Update initialization code
- Translate comments to English
- Extract date parameters into variables
- Replace `<br>` with `\n`
- Add success/failure output for boolean return
- Change `$windows->get_system_date()` and `$windows->set_system_date()` to `WINDOW::$windows->...`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 23. set_system_time.php
- Add scenario: "Change the system time"
- Update initialization code
- Translate comments to English
- Extract time parameters into variables
- Replace `<br>` with `\n`
- Add success/failure output for boolean return
- Change `$windows->get_system_time()` and `$windows->set_system_time()` to `WINDOW::$windows->...`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 24. set_system_time_synchro_period.php
- Add scenario: "Set the system time synchronization period"
- Update initialization code
- Translate comments to English
- Extract period parameter into variable
- Replace `<br>` with `\n`
- Add success/failure output for boolean return
- Change `$windows->get_system_time()`, `$windows->set_system_time()`, and `$windows->set_system_time_synchro_period()` to `WINDOW::$windows->...`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 25. shutdown.php
- Add scenario: "Shut down the computer"
- Update initialization code
- Translate comments to English
- Add success/failure output for boolean return
- Change `$windows->shutdown()` to `WINDOW::$windows->shutdown()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 26. start_video_record.php
- Add scenario: "Start recording video of the screen"
- Update initialization code
- Translate comments to English
- Extract all parameters into variables
- Change `$browser->start_video_record()` to `WEB::$browser->start_video_record()`
- Change `$browser->navigate()` to `WEB::$browser->navigate()`
- Change `$browser->stop_video_record()` to `WEB::$browser->stop_video_record()`
- Change `$windows->start_video_record()` to `WINDOW::$windows->start_video_record()`
- Change `$windows->stop_video_record()` to `WINDOW::$windows->stop_video_record()`
- Change `$app->shell_execute()` to `WINDOW::$app->shell_execute()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

### 27. stop_video_record.php
- Add scenario: "Stop recording video of the screen"
- Update initialization code
- Translate comments to English
- Extract all parameters into variables
- Change `$browser->start_video_record()` to `WEB::$browser->start_video_record()`
- Change `$browser->navigate()` to `WEB::$browser->navigate()`
- Change `$browser->stop_video_record()` to `WEB::$browser->stop_video_record()`
- Change `$windows->start_video_record()` to `WINDOW::$windows->start_video_record()`
- Change `$windows->stop_video_record()` to `WINDOW::$windows->stop_video_record()`
- Change `$app->shell_execute()` to `WINDOW::$app->shell_execute()`
- Change `$app->quit()` to `WINDOW::$app->quit()`

## Next Steps:
1. Switch to Code mode to implement all these changes
2. Create each file with the updated code according to the plan above
3. Verify all files follow the specified rules
4. Place all final files in the `examples/` directory