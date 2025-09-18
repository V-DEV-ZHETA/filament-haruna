# TODO: Implement Comment Section with Pagination

## Tasks
- [ ] Modify PublicController@index to limit comments to 6 on index page
- [ ] Add new method commentsPage() in PublicController for dedicated comment page
- [ ] Add route for /comments in routes/web.php
- [ ] Update resources/views/public/index.blade.php to show only 6 comments and link to full page if >6
- [ ] Create new view resources/views/public/comments.blade.php for wider comment column
- [ ] Test the implementation
