<div id="powerdns_add_header" class="add powerdns module_header">
    <h2><?php echo $title; ?></h2>
</div>

<div id="powerdns_add_form" class="add powerdns">
    <?php echo form::open(); ?>

    <?php echo form::open_section('Domain Information'); ?>

        <div class="field">
        <?php
            echo form::label('pdnsdomain[name]', 'Name:');
            echo form::input('pdnsdomain[name]');
        ?>
        </div>

    <?php echo form::close_section(); ?>
    
    <?php echo form::open_section('SOA Record Information'); ?>

        <div class="field">
        <?php
            echo form::label('pdnsdomain[soa][primary]', 'Primary Nameserver:');
            echo form::input('pdnsdomain[soa][primary]', $primary);
        ?>
        </div>

        <div class="field">
        <?php
            echo form::label('pdnsdomain[soa][hostmaster]', 'Hostmaster:');
            echo form::input('pdnsdomain[soa][hostmaster]', $hostmaster);
        ?>
        </div>

    <?php echo form::close_section(); ?>

    <?php if (isset($views)) echo subview::renderAsSections($views); ?>

    <?php echo form::close(TRUE); ?>
</div>