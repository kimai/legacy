# Administration

In the admin panel you can do every administration that is necessary for the running system.

## Customers

Here you can add, change and delete customers. If you do not set a password the customer cannot login to Kimai. By selecting a group you enable all members of that group to see that customer. All fields except the customer name are optionally.

## [Projects](administration/projects.md)

Here you can add, change and delete projects. Projects have to be assigned to a customer. Further you can set rates for this project if they differ from the standard rates (for details about rates see chapter [Rates](rates.md)). If there is a budget it can be set here, too.

## Tasks

Here you can add, change and delete tasks. A task has no relation to a customer or a project, but you can select which groups can use them. Additionally you can set rates here, too (for details about rates see chapter [Rates](rates.md)).

## [Users](administration/users.md)

Here you can add, change and delete users. 
Users work with Kimai and can add, change or delete data like their own time records and other data. What a user can do depends on roles and rights. The roles and rights are set using global roles, membership roles and groups.

## Groups

Here you can add, modify and delete groups and also define their membership role. Every group can have an unlimited amount of membership roles.

## Global Roles

User get their permissions from their global roles and from their group membership 

## Membership roles

The membership role defines with role a user has inside of a group.

## Status

Use this function to define status labels.

## Advanced

Here you can define general settings like number of failed login-tries, bantime, currency, etc.

## Database

Backup the database with the maintenance function before updating Kimai. Other database functions might be implemented here in the future.
