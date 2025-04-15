# 📚 Book Management App - TODOs

A simple book management system built with Laravel.

---

## 🔧 Features In Progress

- Add "view by ID" for books and authors
- Add delete operations for books and authors
- Finish form (create/edit) for both books and authors
- Add basic validation to forms
- Add CSRF protection

---

## 📈 Popular Book Logic (Inspired by Aaron Francis ✨)

- Add `clicks` column to `books` table (migration)
- Increment `clicks` count every time a book is viewed
- Display top 5 most clicked books on homepage or sidebar
- (Optional) Add a badge or label for "Most Popular"

---

## 🧪 Testing (Later Phase)

- Setup basic feature test (e.g. create book, view book, delete book)
- Test author-book relationship logic
- Test click counting logic (assert clicks increment)

---

## 💳 Stripe Integration (Later Phase)

- Add Stripe keys to `.env`
- Create simple checkout view for book purchase
- Handle webhook for success/failure
- Store transaction info in `orders` table (optional)

---

## 👤 Auth & Roles

- Implement Laravel Breeze (simple, fast setup)
- Separate routes/views for Admin vs Customer
- Protect routes with middleware
- Learn how Laravel handles auth behind the scenes

---

## 🧠 Nice-to-Haves / Ideas

- Add category/tag filter on book listing
- Add star ratings or upvotes for books
- Add search bar to find books by title or author
- Soft deletes for books (with trash bin feature)
- Email user after successful purchase

---

