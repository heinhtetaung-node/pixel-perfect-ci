# QA Checklist

## 1) Pixel Alignment and Spacing

- Validate section spacing against design intent on desktop, tablet, and mobile widths.
- Check button paddings, card spacing, and content gutters for consistency.
- Confirm border radius, shadows, and visual rhythm are consistent across modules.

## 2) Typography Accuracy

- Verify heading hierarchy (`h1` to `h3`) is semantically correct and visually balanced.
- Confirm line height, paragraph readability, and text contrast are consistent.
- Ensure emphasis styles (eyebrow, buttons, links) match intended visual hierarchy.

## 3) Responsive Behaviour

- Test at breakpoints: `320`, `375`, `768`, `1024`, `1280`, and `1440` widths.
- Confirm no clipped text, horizontal overflow, or overlapping interactive elements.
- Validate navigation, hero actions, cards, and FAQ accordion remain usable on mobile.

## 4) Cross-Browser Behaviour

- Run smoke test on:
  - Chrome (latest)
  - Firefox (latest)
  - Safari (latest available)
- Check layout consistency, hover states, and accordion interaction parity.

## 5) SEO Validation

- Confirm `title` and `meta description` are present.
- Ensure one `h1` per page and meaningful heading progression.
- Validate link text clarity and semantic landmark usage (`header`, `main`, `section`, `footer`).

## 6) Accessibility Basics

- Confirm keyboard navigation for all links and accordion controls.
- Verify sufficient color contrast for body copy and interactive elements.
- Check `aria-expanded`, `aria-controls`, and landmark navigation support.

## 7) Core Web Vitals Considerations

- Minimize layout shift by avoiding dynamic content jumps above the fold.
- Keep CSS concise and ensure render path remains light.
- Use compressed images/icons if visual assets are added later.

## 8) Lighthouse Checks

- Run Lighthouse for:
  - Performance
  - Accessibility
  - Best Practices
  - SEO
- Target score: `90+` where feasible for local static checks.

## 9) Data Source and Rendering

- Validate `app/Data/homepage.json` schema consistency.
- Confirm fallback handling if JSON is missing or malformed.
- Verify all dynamic sections render without PHP notices.
