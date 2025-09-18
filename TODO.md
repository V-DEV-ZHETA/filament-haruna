# TODO: Make Like Feature Real-Time

## Tasks
- [x] Create migration to add `likes` column to comments table
- [x] Update Comment model to include `likes` in fillable
- [x] Add route for POST `/comments/{id}/like`
- [x] Add `like` method in PublicController to handle like/unlike and return JSON
- [x] Run migrations
- [x] Install Pusher PHP SDK and Laravel Echo
- [x] Set up Laravel broadcasting with Pusher for real-time updates
- [x] Create LikeUpdated event and broadcast it
- [x] Update frontend to listen for real-time like updates using Laravel Echo
- [ ] Configure broadcasting (add Pusher credentials to .env)
- [ ] Test real-time functionality
