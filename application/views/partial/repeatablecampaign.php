<div class="campaign" id="campaign-<?=$campaign->campaign_id?>">
	<div class="name">
	<h4><?=$campaign->title?></h4>
	</div>
	<div class="actions">
    <a href="<?=base_url()?>index.php/mailchimpdash/editrepeatablecampaign/<?=$campaign->campaign_id?>" onClick="thickit(this); return false;" class="button pill left">Edit Campaign</a><a href="javascript:void(0)" onClick="deleteCampaign(<?=$campaign->campaign_id?>); return false;" class="button pill right bad">Delete Campaign</a>
    </div>
    <div class="clear"><!--  --></div>
</div>