---
name: html-to-php-converter
description: >
  Convert HTML or React websites to PHP with reusable header/footer
  includes. Extracts common components, creates include files, and
  converts pages while preserving design and functionality. Use when
  user says "convert to PHP", "HTML to PHP", "React to PHP", "PHP
  conversion", or "create PHP includes".
user-invokable: true
argument-hint: "[source-folder] [target-folder]"
license: MIT
allowed-tools: Read, Grep, Glob, Bash, Write, Edit
metadata:
  author: MiMo
  version: "1.0.0"
  category: development
---

# HTML to PHP Converter

Convert HTML or React websites to PHP with reusable components.

## Conversion Process

### Phase 1: Analysis

1. **Read all HTML files** to identify common elements
2. **Extract repeated sections**:
   - Header/navigation
   - Footer
   - Sidebar (if any)
   - Common scripts and styles
3. **Identify page-specific content** that varies per page

### Phase 2: Create Include Files

#### header.php
```php
<?php
$page_title = isset($page_title) ? $page_title : "Default Title";
$meta_description = isset($meta_description) ? $meta_description : "Default description";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <!-- CSS files -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Navigation -->
    <header>
        <!-- Navigation code -->
    </header>
```

#### footer.php
```php
    <!-- Footer -->
    <footer>
        <!-- Footer code -->
    </footer>
    
    <!-- Scripts -->
    <script src="js/app.js"></script>
</body>
</html>
```

#### custom-header-link.php
```php
<?php
// Custom header links or tracking code
$base_url = '';
?>
```

### Phase 3: Convert Pages

For each page:

1. **Create PHP file** with same name (e.g., `about.html` → `about.php`)
2. **Add PHP variables** at top:
   ```php
   <?php
   $page_title = "About Us";
   $meta_description = "Learn about our company...";
   include 'header.php';
   ?>
   ```
3. **Include footer** at bottom:
   ```php
   <?php include 'footer.php'; ?>
   ```
4. **Replace hardcoded paths** with PHP variables:
   ```html
   <!-- Before -->
   <a href="about.html">About</a>
   
   <!-- After -->
   <a href="<?php echo $base_url; ?>about.php">About</a>
   ```

### Phase 4: Update Links

1. **Header navigation**: Update all links to .php
2. **Footer links**: Update all links to .php
3. **Internal links**: Update all page references
4. **Assets**: Ensure CSS/JS paths work with includes

## Common Patterns

### Pattern 1: Simple Page
```php
<?php include 'header.php'; ?>

<main>
    <!-- Page content -->
</main>

<?php include 'footer.php'; ?>
```

### Pattern 2: Page with Variables
```php
<?php
$page_title = "Contact Us";
$meta_description = "Contact our team...";
$canonical_url = "https://example.com/contact.php";
include 'header.php';
?>

<main>
    <!-- Page content using variables -->
</main>

<?php include 'footer.php'; ?>
```

### Pattern 3: React to PHP
```php
<?php
$page_title = "Home";
include 'includes/header.php';
?>

<!-- Convert React components to PHP/HTML -->
<section class="hero">
    <h1><?php echo $hero_title; ?></h1>
    <p><?php echo $hero_description; ?></p>
</section>

<?php include 'includes/footer.php'; ?>
```

## File Structure

```
project/
├── header.php          # Common header
├── footer.php          # Common footer
├── custom-header-link.php  # Custom includes
├── index.php           # Homepage
├── about.php           # About page
├── contact.php         # Contact page
├── css/
│   └── styles.css      # Main stylesheet
├── js/
│   └── app.js          # Main JavaScript
└── assets/
    └── images/         # Image assets
```

## Quality Checklist

- [ ] All pages use header.php include
- [ ] All pages use footer.php include
- [ ] No duplicate HTML code
- [ ] All links updated to .php
- [ ] CSS/JS paths correct
- [ ] PHP variables for dynamic content
- [ ] Meta tags customizable per page
- [ ] Responsive design preserved
- [ ] Forms functional
- [ ] JavaScript working

## Common Mistakes to Avoid

❌ Forgetting to include footer.php
❌ Broken asset paths after conversion
❌ Not updating internal links
❌ Missing PHP variables for dynamic content
❌ Duplicate code in multiple files
❌ Forgetting to test responsive design
❌ Missing error handling for includes

## Example Conversion

**Input:** HTML website with 10 pages

**Output:**
1. `header.php` - Extracted header with navigation
2. `footer.php` - Extracted footer with scripts
3. `index.php` - Homepage with includes
4. `about.php` - About page with includes
5. ... (all pages converted)

**Time saved:** ~60% reduction in code duplication
**Maintenance:** Single point of change for header/footer
