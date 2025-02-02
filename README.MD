<p align="center">
    <br><br>
    <img src="https://leafphp.dev/logo-circle.png" height="100"/>
    <br><br>
</p>

# Leaf MVC

[![Latest Stable Version](https://poser.pugx.org/leafs/mvc/v/stable)](https://packagist.org/packages/leafs/mvc)
[![Total Downloads](https://poser.pugx.org/leafs/mvc/downloads)](https://packagist.org/packages/leafs/mvc)
[![License](https://poser.pugx.org/leafs/mvc/license)](https://packagist.org/packages/leafs/mvc)

Leaf MVC is a lightweight but feature-rich MVC framework built on top of [leaf php](https://leafphp.dev). It gives you the simplicity of Leaf and it's modules with the structure of an MVC framework. Leaf MVC is a great choice for building applications that scale without the complexity of most modern frameworks.

## 📦 Installation

You can install Leaf MVC with the [Leaf CLI](https://cli.leafphp.dev)

```sh
leaf create <project-name> --mvc
```

Or for a more personalized installation, you can add `--custom` to the command

```sh
leaf create <project-name> --mvc --custom
```

You can also use [Composer](https://getcomposer.org/) if you don't want to use the Leaf CLI, although we recommend using the CLI for a better experience:

```bash
composer create-project leafs/mvc <project-name>
```

Note that `<project-name>` is the name of the project you want to create, and that will be your folder name. You can also use `.` to install in the current directory.

## 🗂 Directory Structure

```bash
C:.
├───app
│   ├───console
│   ├───controllers
│   ├───database
│   │   ├───factories
│   │   ├───migrations
│   │   ├───schema
│   │   └───seeds
│   ├───helpers
│   ├───models
│   ├───routes
│   └───views
│       ├───css
│       └───errors
├───config
├───lib
├───public
│   └───assets
│       ├───css
│       └───img
├───storage
│   ├───app
│   │   └───public
│   ├───framework
│   │   └───views
│   └───logs
└───vendor
```

This directory structure is our opinionated way of organizing your MVC application. It is a blend of the best practices from different frameworks like Ruby on Rails and Laravel and some of our own experience building applications.

To run your Leaf MVC application, use

```bash
php leaf serve
```

Or with the Leaf CLI

```bash
leaf serve
```

## 📓 Learning Leaf MVC

- Leaf MVC has a very easy to understand [documentation](https://leafphp.dev/docs/mvc/) which contains information on all operations in Leaf MVC.
- Since Leaf MVC runs on Leaf, you should check out the Leaf PHP Framework documentation [here](https://leafphp.dev).
- You can also check out our [youtube channel](https://www.youtube.com/channel/UCllE-GsYy10RkxBUK0HIffw) which has video tutorials on different topics
<!-- - We are also working on [codelabs](https://codelabs.leafphp.dev) which will bring hands-on tutorials you can follow and contribute to. -->

## 😇 Contributing

We are glad to have you. All contributions are welcome! To get started, familiarize yourself with our [contribution guide](https://leafphp.dev/community/contributing.html) and you'll be ready to make your first pull request 🚀.

To report a security vulnerability, you can reach out to [@mychidarko](https://twitter.com/mychidarko) or [@leafphp](https://twitter.com/leafphp) on twitter. We will coordinate the fix and eventually commit the solution in this project.

## 🤩 Sponsoring Leaf

Leaf has always been open-source and free, but as the project grows, so do the challenges of maintaining and building new features. The costs—time, resources, and infrastructure—are increasing rapidly, and our small team can no longer sustain this alone.

To keep Leaf alive and thriving, we need your support now more than ever. Sponsor us on [GitHub Sponsors](https://github.com/sponsors/leafsphp) or visit our [sponsors page](https://leafphp.dev/support/) to explore ways you can contribute.

Your help makes all the difference—let’s keep Leaf moving forward together!

And to all our [existing cash/code contributors](https://leafphp.dev#sponsors), we love you all ❤️
