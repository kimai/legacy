# Developer

There are several ways to get a copy of Kimai.

## Releases

From time to time we will release ZIP archives. These are most often beta versions, to be tested by our user base for problems and bugs. Prodution ready releases will be linked specifically in the download section at our website.

You can download the current developer-version as ZIP from our [master branch at GitHub](https://github.com/kimai/kimai/archive/master.zip).

## From The Repository

To get the developer version use the repository. Please keep in mind, that this version is NOT stable! We like to receive bug reports to be faster with fixing them, but we can not guarantee support for these versions.

We recommend using a fork, so any changes made can be pushed back and then submitted back via pull-requests:

* Fork Kimai
* Clone it locally: `git clone https://github.com/YOUR-USERNAME/kimai.git`

Then, if you want to make changes and submit them, use a feature branch:

* `git checkout -b my-feature`
* `git commit -am "Added my feature"`
* `git push origin my_kimai`

Create a pull request from your GitHub repo page.

# Build Kimai from source

Nightly Builds can be created by zipping the "core"-folder. Thats all you have todo.

For beta versions we have to edit the file "includes/version.php" and change $kga['status'] to "beta".

For a release we have to do the following:

  1. Deactivate "Debug Extension" by prepending a # to the folder name
  2. Change $kga['status'] to an empty string
  3. Add error_reporting(E_ERROR); to "basics.php"

