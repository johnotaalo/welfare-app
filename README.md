## Welfare app

This is a software that helps with managing a welfare group. The application is built on a multi-tenant environment that allows for multiple instances of the app to be run for different clients. 
The _client_ in this case refers to the welfare group using the application. Each welfare group will have its own tenant and will have separate instances. There is however and instance that will create these other instances.

The intention is to have it manage the following:
### 1. Member Management
Members are registered under each Welfare Group. The members will also be assigned roles by the Welfare Administrator. The roles would be, but not limited to: 
+ Chair Person
+ Vice Chair Person
+ Secretary
+ Vice Secretary
+ Treasurer
+ Vice Treasurer
+ Member
### 2. Account Management
Each Welfare Group will have an "Account" in their instance. The Account manages the ins and outs in terms of the contributions made by members and also any withdraws made would be recorded in the system.
### 3. Contribution Management
Each member's contribution is captured in the application. The Welfare Group Admin can manage how frequent the contributions are made. This could be: 
+ Daily
+ Weekly
+ Monthly
+ Quarterly
+ Bi-Annually
+ Yearly
The contributions are recorded and are visible to members of the Welfare Group
### 4. Monthly Reports
The system also provides monthly reports for contributions as well as expenditures.
The reports are in the form of spreadsheets, pdf and dashboards made from Javascript graphs.
### 5. Reminders
### 6. Message Board for Members

The application is built on Laravel 8, Vue 2 and MySQL.

_More to follow_
