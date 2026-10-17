git add -A
git commit -m "feat: redesign admin login page UX

- Cleaned up auth.blade.php: removed inline styles, moved all to admin.css
- Rewrote login.blade.php with enhanced UX:
  - Welcome back heading instead of Admin Login
  - Remember me checkbox
  - Forgot password link
  - Social login divider with Google button
  - Footer with registration link
  - Error messages shown before form fields
  - Better brand with Est. Kenya subtitle
- Added comprehensive .auth-login-* CSS classes to admin.css:
  - Dark green gradient panel background
  - White card with 20px border-radius and refined shadow
  - Focus states on inputs
  - Hover/active states on buttons
  - Responsive design for mobile
  - Social button styling with Google icon
- All tests pass (2/2)"