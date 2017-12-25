# testTravis-CI
测试持续化集成

1. 测试mysql-db

```
services:
  - mysql

before_install:
    - mysql -e 'CREATE DATABASE IF NOT EXISTS test;'
```
