---
title: Getting Discord Token by using javascript
date: '2022-07-22T08:42:52+00:00'
description: 'This tutorial will show off how to get token easily using JavaScript'
---

### Getting Discord Token by Using JavaScript
In this tutorial, will show off, how to get your token easily using javascript in any device.

#### General Purposes
This tutorial is for educational purposes. Please use it at your own risk. Since this tutorial breaks [Discord Terms of Services](https://discord.com/tos)

##### Choose your device.
- [Mobile Devices, IOS](#mobile-and-ios)

- [Desktop Devices, MAC](#desktop-and-mac)

##### Mobile and IOS
- **Step #1**: Open browser, and go to https://discord.com/app
- **Step #2**: Click top of URL, and paste these following:
```js

   // Since chrome blocking "javascript:" parameter of url.
   // You must include them in include it on the line of url.

   // You can have to choose what do you want.
   // Chrome has built in url encoder if you choose Decoded URL.
   // You can choose non-decoded because it is recommendable.

   // Decoded URL
     javascript:(function(){location.reload();var i = document.createElement('iframe');document.body.appendChild(i);window.prompt("Yourtoken:Tap to Copy It.",i.contentWindow.localStorage.token)})()

   // Encoded URL
     javascript:(function()%7Blocation.reload()%3Bvar%20i%20%3D%20document.createElement('iframe')%3Bdocument.body.appendChild(i)%3Bwindow.prompt("Your token: Tap%20to%20Copy%20It.",i.contentWindow.localStorage.token)%7D)()
```

- **Step #3**: Done, you can now copy your token ;)

##### Desktop and MAC
- **Step #1**: Open browser, and go to `https://discord.com/app`_
.. _`https://discord.com/app`: https://discord.com/channels/@me).
- **Step #2**: Click on your keyboard: 

`For Windows : CTRL+SHIFT+I`

`For MAC OS X: Ctrl+Option+J`


- **Step #2**: Add following codes on console:

```js

   location.reload();
   var i = document.createElement('iframe');document.body.appendChild(i);
   window.prompt("Yourtoken:Tap to Copy It.",i.contentWindow.localStorage.token)
```

- **Step #3**: Done, you can now copy your token ;)

<p align="right"><i>Happy Coding ;)</i></p>
