<main class="grid grid-cols-1 gap-2 w-full md:w-auto">
    <?php if (count($projects) < 1) : ?>
        <p>There currently are no projects</p>
    <?php else : ?>
        <?php foreach ($projects as $site) : ?>
            <a href="<?= 'https://' . $site['path'] . '.neo.fyi' ?>" class="p-4 bg-slate-50 mx-2 hover:bg-blue-300 md:mx-0 text-center">
                <div>
                    <p class="text-xl"><?= $site['name'] ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</main>