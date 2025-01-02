# CI-CD Workflow
1. **Code locally** in your development environment (e.g., Laravel Sail).
2. **Commit** the code to your local Git repository.
3. **Push** the changes to GitHub (e.g., `develop` or `feature` branch).
4. **GitHub Action** is triggered upon push to GitHub, executing the **build and test** job.
5. **Build and Test**:
    - GitHub Actions installs dependencies, runs tests, and ensures code quality.
    - If tests pass, the code is considered validated.
6. **Review results** in GitHub Actions.
7. **Deploy** the changes to a staging or production environment (either manually or automatically).