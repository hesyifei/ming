# [名.org](https://名.org/)

_(A work-in-progress…)_

## What is this?

“**[名](https://en.wiktionary.org/wiki/名)**” (pronounced “**míng**”) means “**name**” in Chinese.

**[名.org](https://名.org/)** is a PHP website that aims to host a broad range of Chinese translations of technical terms. It also serves as an experiment / a proof of concept for purely using the Chinese language for variable names, class names, function names, etc. in PHP.

## 中文编程？

不少人对所谓的“中文编程”[嗤之以鼻](https://www.zhihu.com/question/355223335)，但我认为一定程度上在编程语言中使用中文可能的确可以减轻理解难度（我在约十年前学习的第一个编程语言便是[易语言](https://baike.baidu.com/item/%E6%98%93%E8%AF%AD%E8%A8%80)）。所以在 **[名.org](https://名.org/)** 这个项目中，我尝试仅使用中文变量名、类名、函数名等来编写该 PHP 网站。

---

## 设立开发环境

开发环境基于 PHP 7.4。

安装依赖包：

```bash
composer install
```

启动本地 PHP 服务器：

```bash
php -S localhost:8080 router.php
```
