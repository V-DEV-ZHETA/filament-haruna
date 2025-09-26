# Task: Add URL form field in Kontak resource (Filament admin)

## Steps:
- [ ] Edit app/Filament/Resources/KontakResource.php: Update TextInput 'value' to conditionally use ->url() for social types (facebook, instagram, etc.), with placeholder.
- [ ] Test: In admin panel, create/edit Kontak with social type – verify URL input, validation (accepts valid URLs, rejects invalid); non-social as text.
- [ ] Verify frontend: New URLs display correctly in public/index.blade.php social links.
- [ ] Update TODO: Mark completed steps.
