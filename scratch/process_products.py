import re

html_path = r"c:\Freelance\Balaji_Exports_Full\products.html"
blade_path = r"c:\Freelance\Balaji_Exports_Full\resources\views\front\static\listing.blade.php"

with open(html_path, "r", encoding="utf-8") as f:
    html = f.read()

# Extract <main> content
main_match = re.search(r"<main>(.*?)</main>", html, re.DOTALL | re.IGNORECASE)
if not main_match:
    print("Could not find <main> tag in products.html")
    exit(1)

main_content = main_match.group(1).strip()

# Wrap images with asset()
# Match src="images/..." and href="images/..." if any.
main_content = re.sub(r'src="([^"]+)"', r'src="{{ asset(\'\1\') }}"', main_content)
# But wait, there might be urls in inline styles like background-image: url('images/banner/2.png');
main_content = re.sub(r"url\('([^']+)'\)", r"url('{{ asset('\1') }}')", main_content)
main_content = re.sub(r'url\("([^"]+)"\)', r'url("{{ asset(\'\1\') }}")', main_content)

# Update internal links like href="contact.html" to href="{{ route('contact') }}"
# For the products page, the breadcrumb has href="index.html"
main_content = re.sub(r'href="index\.html"', r'href="{{ route(\'home\') }}"', main_content)
main_content = re.sub(r'href="about\.html"', r'href="{{ route(\'about\') }}"', main_content)
main_content = re.sub(r'href="contact\.html"', r'href="{{ route(\'contact\') }}"', main_content)

# The HTML also uses a body class? No, the user provided `<body class="sercvice-page">` earlier for services.
# Let's check if the body tag in products.html has a class.
body_match = re.search(r"<body([^>]*)>", html, re.IGNORECASE)
body_class = ""
if body_match:
    class_match = re.search(r'class="([^"]+)"', body_match.group(1))
    if class_match:
        body_class = class_match.group(1)

blade_content = f"@extends('layouts.front')\n"
if body_class:
    blade_content += f"@section('body_class', '{body_class}')\n"
blade_content += f"@section('content')\n{main_content}\n@endsection\n"

with open(blade_path, "w", encoding="utf-8") as f:
    f.write(blade_content)

print(f"Successfully processed products.html and wrote to {blade_path}")
