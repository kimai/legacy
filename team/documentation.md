# Writing documentation

If you find some quirks in the documentation or found something worth mentioning, please don't hesitate to extend the documentation and send in pull requests.

Our repository for the documentation is located at:
* https://github.com/kimai/documentation

We use Markdown to write the documentation and the great [GitbookIO](https://github.com/GitbookIO) tools to write and publish it.

You can either use the [GitBook Editor](https://www.gitbook.com/editor) or write the Markdown directly in your favorite editor.
If you are going to add Chapters or Articles manually, make sure to include them in the file SUMMARY.md.

If you want to convert HTML documentation to Markdown, you can for example use the online tool [heckyesmarkdown.com](http://heckyesmarkdown.com/)
or [to-markdown.js](http://domchristie.github.io/to-markdown/)

## Compiling

To use the gitbook command, install gitbook client via npm
```
npm install -g gitbook-cli
```

To compile the HTML version of the documentation, use this command:
```
gitbook build . --title="Kimai Documentation" --github=kimai/kimai
```
Output can be found in the _book/ folder.

Team member can use the [build.sh](https://github.com/kimai/documentation/blob/master/build.sh) file to create a new
book version and commit it directly (it will be published directly).
