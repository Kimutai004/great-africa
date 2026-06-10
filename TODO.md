# TODO - Admin Panel (Events/Blog + Contact/Get Involved)

## Step 1: Data layer
- [ ] Create migrations + models for:
  - [ ] events
  - [ ] posts (news/blog)
  - [ ] contact_messages
  - [ ] volunteer_requests

## Step 2: Public pages + endpoints
- [ ] Update public `GET /events` to render DB events
- [ ] Update public `GET /blog` to render DB posts
- [ ] Update public `POST /contact` to persist contact form submissions
- [ ] Update public `POST /get-involved` to persist volunteer requests

## Step 3: Admin auth + admin UI
- [ ] Add minimal admin auth (simple login route + middleware/guard)
- [ ] Create admin layout + pages for CRUD:
  - [ ] Events CRUD (list/create/edit/delete)
  - [ ] Posts CRUD (list/create/edit/delete)
  - [ ] Contact messages list + delete
  - [ ] Volunteer requests list + delete

## Step 4: Controllers + routes
- [ ] Implement controllers for public + admin
- [ ] Register routes in `routes/web.php`

## Step 5: Verify
- [ ] Run migrations
- [ ] Run dev server and manually test:
  - [ ] Create event and see it on `/events`
  - [ ] Create post and see it on `/blog`
  - [ ] Submit contact/get-involved forms and see admin lists update


