---
title: How to install PocketMine-MP in any platforms/devices.
date: '2022-07-21T08:42:52+00:00'
description: 'Install PocketMine-MP in any platforms easily!'
---

# Introduction
This tutorial will show, How to install PocketMine-MP in any platforms/devices!

> **NOTE**<br>
> This site is for **educational purposes** only!! <br>
> Copyright Disclaimer under section 107 of the Copyright Act 1976, allowance is made for “fair use” for purposes such as criticism, comment, news reporting, teaching, scholarship, education and research.

## Setup Requirements
A computer or device with the following is required:

- 64-bit CPU
- 64-bit operating system
- 1GB RAM or better

The following are not requirements, but recommended:

- Dual-core or better CPU

### Linux/MacOS only
Create a directory which you want to install PocketMine-MP into, and `cd` into it.

Then use `curl` to install PocketMine-MP using the following command:

```sh
curl -sL https://get.pmmp.io | bash -s -
```

or, if you don’t have `curl`, try `wget`:

```sh
wget -q -O - https://get.pmmp.io | bash -s -
```

### Installing manually
No installer available for your platform? Did the installer fail? It is not your taste? YOLO? DIY!

#### Getting PHP for your server
1. Download your flavor PHP binary ([Downloads](https://jenkins.pmmp.io/job/PHP-8.0-Aggregate/))
2. Extract the PHP binary into your server directory. If everything went well, you should have a bin folder in your server directory.
3. (Windows only) Download and install Microsoft Visual C++ Redistributable 2019 ([Downloads](#downloads-for-manual-installupdate))

#### Getting PocketMine-MP
1. Create a new directory for PocketMine-MP.
2. Download PocketMine-MP.phar ([Downloads](#downloads-for-manual-installupdate))
3. Rename the .phar to PocketMine-MP.phar.
4. Place it in the PocketMine-MP directory you just created.
5. Get the start script for your platform ([Windows](https://github.com/pmmp/PocketMine-MP/releases/latest/download/start.cmd), [Linux/MacOS bash](https://github.com/pmmp/PocketMine-MP/releases/latest/download/start.sh))
6. (Linux/MacOS only) Make start.sh executable (chmod +x start.sh)

#### Downloads for manual install/update
##### PocketMine-MP prebuilt phars
- [Latest Stable Release](https://github.com/pmmp/PocketMine-MP/releases/latest)
- [List of Releases](https://github.com/pmmp/PocketMine-MP/releases)

> **TIP:** <br>
> Can’t see the downloads? Click on ‘Assets’ to expand the downloads list.

##### Prebuilt PHP binaries and related packages
- [PHP 8.0](https://jenkins.pmmp.io/job/PHP-8.0-Aggregate/)
- (Windows only) [Microsoft Visual C++ 2019 Redistributable](https://aka.ms/vs/16/release/vc_redist.x64.exe)

> **NOTE:** <br>
> If there are no prebuilt binaries of the version you want available for your platform, you may be able to build your own using our [compile scripts](https://github.com/pmmp/php-build-scripts).

### Android and IOS only
- If you are using [Termux App for Android](https://f-droid.org/en/packages/com.termux/), You can view [full tutorial](https://github.com/keenanyafiqy/PocketMine-MP-Installation#how-to-install) about installing pocketmine manually on your platform.
- You can download an [alternative app](https://play.google.com/store/apps/details?id=com.kpwnapps.pmmpplugins) which does not came from officialy from PocketMine-MP, You can read it [here](https://discord.com/channels/373199722573201408/373214712873353239/977567742062374973) about it.

