

Grabbing content:

```js
var content = tinymce.get('blog-entry').getContent()
```
  - it needs the ID but doesn't use jQuery syntax

Setting content:

```js
tinymce.get('blog-entry').setContent('<h1>This is an H1</h1>')
```
