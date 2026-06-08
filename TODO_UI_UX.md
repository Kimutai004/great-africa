# TODO_UI_UX (UI/UX refresh)

## Step 1 — Design tokens & global CSS cleanup
- [ ] Refine `:root` tokens (type scale, spacing, focus styles)
- [ ] Add global `:focus-visible` + accessible button/link states
- [ ] Remove/neutralize conflicting page-specific styles where possible

## Step 2 — Shared UI components
- [ ] Add partials for hero, section heading, and CTA band

## Step 3 — Layout overhaul
- [ ] Update `resources/views/layouts/app.blade.php`
  - [ ] Improve header UX (scroll/visual states)
  - [ ] Improve mobile drawer accessibility (focus lock, ESC, click-outside)
- [ ] Update footer UX (hierarchy + link styles)

## Step 4 — Page cleanup
- [ ] Remove inline styles from all pages (replace with classes)
- [ ] Update pages to use new hero/section partials where applicable

## Step 5 — Visual verification
- [ ] Manual pass on all routes: home/about/programs/impact/events/blog/get-involved/contact
- [ ] Responsive checks (mobile/tablet)

## Step 6 — Polish
- [ ] Ensure consistent spacing/typography across pages
- [ ] Run dev/build and fix any regressions

