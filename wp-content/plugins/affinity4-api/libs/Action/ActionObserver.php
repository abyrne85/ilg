<?php
namespace Affinity4API\Action;

interface ActionObserver
{
    /**
     * Trigger method
    */
	public function update();
}