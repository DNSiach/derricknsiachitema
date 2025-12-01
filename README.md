# Deploying this project to Vercel

This repository contains a simple static site. This guide shows two quick ways to deploy it to Vercel: using the Vercel Dashboard (Git integration) or using the Vercel CLI from your machine (PowerShell examples included).

## Quick checklist
- Ensure your main HTML file is accessible (recommended: `index.html`).
- Install the Vercel CLI if you want to deploy from your machine.

## Option A — Deploy via Vercel Dashboard (Git integration)
1. Push this repository to GitHub (or GitLab/Bitbucket).
2. Go to https://vercel.com and sign in.
3. Click "New Project" → Import from Git Repository → pick this repo.
4. Use the default settings. If your main page is not named `index.html`, set the root file or add a `vercel.json` (this repo includes one that routes `/` to `index.html`).
5. Click Deploy.

## Option B — Deploy from your machine using the Vercel CLI (PowerShell)
1. Install the Vercel CLI:

```powershell
npm install -g vercel
```

2. Login (this opens a browser):

```powershell
vercel login
```

3. From the project root run a preview deploy:

```powershell
cd 'c:\Users\The HUB\Documents\GitHub\derricknsiachitema'
vercel
```

4. To push a production deployment:

```powershell
vercel --prod
```

Notes:
- If you prefer that the site serves `index.html` as the root path, this repo already includes a `vercel.json` that routes `/` to that file and an `index.html` redirect.
- If you want the page to be served directly at `/` without the redirect, rename `derricknsiachitema.html` to `index.html`.

## Files added to help deploy
- `vercel.json` — tells Vercel to treat files as static and routes `/` to `index.html`.
- `index.html` — a tiny redirect so the site works at the root without renaming.
- `.vercelignore` — ignores common local files when deploying.

## Troubleshooting
- 404 on root: confirm `index.html` exists or `vercel.json` route is present.
- Assets not loading: check paths in your HTML — use paths starting with `/assets/...` (these map to `public/assets/` on Vercel). For example: `/assets/css/main.css`.
- Need HTTPS custom domain: add via Vercel Dashboard and follow instructions.

If you want, I can:
- run the deployment commands in a terminal here (you'll need to authenticate interactively), or
- rename your HTML file to `index.html` for a simpler setup.
