<?php  //[STAMP] 24bbbd57a8bac0314650055fb221ca8a
namespace _generated;
// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile
use Helper\Functional;
trait FunctionalTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that array contains subset.
     *
     * @param array  $subset
     * @param array  $array
     * @param bool   $strict
     * @param string $message
     * @see \Codeception\Module::assertArraySubset()
     */
    public function assertArraySubset($subset, $array, $strict = null, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertArraySubset', func_get_args()));
    }
}