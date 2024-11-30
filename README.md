# Movie and Character API

This is a RESTful API built with Laravel that allows managing movie or series data and their associated characters. The API supports CRUD operations for both movies/series and characters, including their relationships.

---

## Features

- Manage movies/series with the following attributes:
  - Name
  - Classification (e.g., drama, action, suspense)
  - Release date
  - General review
  - Season (for series only)
- Manage characters with the following attributes:
  - Name
  - Associated movie or series
  - Picture
  - General description
- Full CRUD functionality for both entities.
- Relationships between movies/series and characters:
  - A movie/series can have many characters.
  - A character belongs to one movie/series.

---

## Requirements

- PHP >= 8.1
- Composer
- Laravel 10
- MySQL or any other supported database
- Git

---

## Installation

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd api-movie-characters
