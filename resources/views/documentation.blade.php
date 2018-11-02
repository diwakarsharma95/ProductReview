@extends('layouts.app')
@section('title')
Products
@endsection
@section('content')
<div class="col-sm-12 text-left" style="background-color:lavender;">
    <ul>
    <b>Completed Tasks</b>
    <li>E-R diagram</li>
    <li>Correct use of migration for creating database table, and seeder for inserting required initial data.</li>
    <li>The following data for a user must be stored: • Email (which will also be their username) • Password • Fullname • Date of birth • Type (regular user or moderator)</li>
    <li>Login in using email and password. The user should be able to login (or get to the login page) from any page.</li>
    <li>User can logout and proper redirect (i.e.. to the home page)</li>
    <li>After register, login, or logout, appropriate redirection should be provided. E.g. if user logs in from the details page, then after user completes the login, s/he should be redirected back to that page.</li>
    <li>An item must contain the item name, manufacture/business name, and description for that item. The item name must be unique. An optional URL can be stored for an item. Only valid URL will be accepted.</li>
    <li>A review must contain a creation date, a rating (e.g. a number between 1 to 5), and the review (text). A user can only post at most one review per item. After a new review is posted, the user will be redirected to the page containing the newly posted review.</li>
    <li>There should be a page that lists all items, and allow user to click on an item to show the details page for that item.</li>
    <li>The details page should show all the information for that item, in addition it also displays all reviews for that item. When displaying review, all information for that review should be displayed. In addition, the name of the user who posted that review must also be displayed.</li>
    <li>Items and reviews can be updated.</li>
    <li>items and reviews can be deleted.</li>
    <li>Input validation must be performed (on server side). If invalid input is detected, the appropriate error message must be displayed, along with the previous entered value.</li>
    <li>Provide different permission for not logged in, regular, and moderator users as per permission tables. Actions that cannot be performed by user</li>
    <li>Check permission on the server side for not logged in, regular, and moderator users as per permission tables before performing an operation.</li>
    <li> Only logged in user can upload item photos</li>
    <li>Users can upload their photos of an item</li>
    <li>Users can vote to like or dislike reviews. A user can only vote for a review once. </li>
    </ul>
    <ul>
    <b>Uncompleted Tasks</b>
    <li>A user can “follow” and “unfollow” reviewers/users.</li>
    <li>After register, login, or logout, appropriate redirection should be provided. E.g. if user logs in from the details page, then after user completes the login, s/he should be redirected back to that page.</li>
    <li>Users can select to display reviews order by date (i.e. the latest review at the top of the page), or order by rating (i.e. the review with the highest rating is at the top of the page).</li>
    <li>When an item is deleted, all reviews for that item should also be deleted.</li>
    <li>Pagination must be used to paginate reviews, where there are more than 5 reviews for an item.</li>
    <li>An item may have many photos uploaded by different users. These photos will be displayed in the details pages for that item. When displaying a photo the name of the user who uploaded the photo should also be displayed. </li>
    <li>Reviews that have more dislike than like would be displayed with lighter color than reviews with more likes than dislikes.</li>
    </ul>
    <ul>
    <b>Interesting approaches</b>
    <li>Implemented a new feature which is a search bar. anyone can search the name of user and check their detials.</li>
    </ul>
    </div>
</div>
@endsection
