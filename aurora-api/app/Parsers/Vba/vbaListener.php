<?php

/*
 * Generated from vba.g4 by ANTLR 4.13.1
 */

namespace App\Parsers\Vba;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see vbaParser}.
 */
interface vbaListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see vbaParser::startRule()}.
	 * @param $context The parse tree.
	 */
	public function enterStartRule(Context\StartRuleContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::startRule()}.
	 * @param $context The parse tree.
	 */
	public function exitStartRule(Context\StartRuleContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::module()}.
	 * @param $context The parse tree.
	 */
	public function enterModule(Context\ModuleContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::module()}.
	 * @param $context The parse tree.
	 */
	public function exitModule(Context\ModuleContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::moduleHeader()}.
	 * @param $context The parse tree.
	 */
	public function enterModuleHeader(Context\ModuleHeaderContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::moduleHeader()}.
	 * @param $context The parse tree.
	 */
	public function exitModuleHeader(Context\ModuleHeaderContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::moduleConfig()}.
	 * @param $context The parse tree.
	 */
	public function enterModuleConfig(Context\ModuleConfigContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::moduleConfig()}.
	 * @param $context The parse tree.
	 */
	public function exitModuleConfig(Context\ModuleConfigContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::moduleConfigElement()}.
	 * @param $context The parse tree.
	 */
	public function enterModuleConfigElement(Context\ModuleConfigElementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::moduleConfigElement()}.
	 * @param $context The parse tree.
	 */
	public function exitModuleConfigElement(Context\ModuleConfigElementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::moduleAttributes()}.
	 * @param $context The parse tree.
	 */
	public function enterModuleAttributes(Context\ModuleAttributesContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::moduleAttributes()}.
	 * @param $context The parse tree.
	 */
	public function exitModuleAttributes(Context\ModuleAttributesContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::moduleDeclarations()}.
	 * @param $context The parse tree.
	 */
	public function enterModuleDeclarations(Context\ModuleDeclarationsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::moduleDeclarations()}.
	 * @param $context The parse tree.
	 */
	public function exitModuleDeclarations(Context\ModuleDeclarationsContext $context): void;
	/**
	 * Enter a parse tree produced by the `optionBaseStmt`
	 * labeled alternative in {@see vbaParser::moduleOption()}.
	 * @param $context The parse tree.
	 */
	public function enterOptionBaseStmt(Context\OptionBaseStmtContext $context): void;
	/**
	 * Exit a parse tree produced by the `optionBaseStmt` labeled alternative
	 * in {@see vbaParser::moduleOption()}.
	 * @param $context The parse tree.
	 */
	public function exitOptionBaseStmt(Context\OptionBaseStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `optionCompareStmt`
	 * labeled alternative in {@see vbaParser::moduleOption()}.
	 * @param $context The parse tree.
	 */
	public function enterOptionCompareStmt(Context\OptionCompareStmtContext $context): void;
	/**
	 * Exit a parse tree produced by the `optionCompareStmt` labeled alternative
	 * in {@see vbaParser::moduleOption()}.
	 * @param $context The parse tree.
	 */
	public function exitOptionCompareStmt(Context\OptionCompareStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `optionExplicitStmt`
	 * labeled alternative in {@see vbaParser::moduleOption()}.
	 * @param $context The parse tree.
	 */
	public function enterOptionExplicitStmt(Context\OptionExplicitStmtContext $context): void;
	/**
	 * Exit a parse tree produced by the `optionExplicitStmt` labeled alternative
	 * in {@see vbaParser::moduleOption()}.
	 * @param $context The parse tree.
	 */
	public function exitOptionExplicitStmt(Context\OptionExplicitStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `optionPrivateModuleStmt`
	 * labeled alternative in {@see vbaParser::moduleOption()}.
	 * @param $context The parse tree.
	 */
	public function enterOptionPrivateModuleStmt(Context\OptionPrivateModuleStmtContext $context): void;
	/**
	 * Exit a parse tree produced by the `optionPrivateModuleStmt` labeled alternative
	 * in {@see vbaParser::moduleOption()}.
	 * @param $context The parse tree.
	 */
	public function exitOptionPrivateModuleStmt(Context\OptionPrivateModuleStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::moduleDeclarationsElement()}.
	 * @param $context The parse tree.
	 */
	public function enterModuleDeclarationsElement(Context\ModuleDeclarationsElementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::moduleDeclarationsElement()}.
	 * @param $context The parse tree.
	 */
	public function exitModuleDeclarationsElement(Context\ModuleDeclarationsElementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::macroStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMacroStmt(Context\MacroStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::macroStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMacroStmt(Context\MacroStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::moduleBody()}.
	 * @param $context The parse tree.
	 */
	public function enterModuleBody(Context\ModuleBodyContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::moduleBody()}.
	 * @param $context The parse tree.
	 */
	public function exitModuleBody(Context\ModuleBodyContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::moduleBodyElement()}.
	 * @param $context The parse tree.
	 */
	public function enterModuleBodyElement(Context\ModuleBodyElementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::moduleBodyElement()}.
	 * @param $context The parse tree.
	 */
	public function exitModuleBodyElement(Context\ModuleBodyElementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::attributeStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterAttributeStmt(Context\AttributeStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::attributeStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitAttributeStmt(Context\AttributeStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlock(Context\BlockContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlock(Context\BlockContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::blockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterBlockStmt(Context\BlockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::blockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitBlockStmt(Context\BlockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::appactivateStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterAppactivateStmt(Context\AppactivateStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::appactivateStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitAppactivateStmt(Context\AppactivateStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::beepStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterBeepStmt(Context\BeepStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::beepStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitBeepStmt(Context\BeepStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::chdirStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterChdirStmt(Context\ChdirStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::chdirStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitChdirStmt(Context\ChdirStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::chdriveStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterChdriveStmt(Context\ChdriveStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::chdriveStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitChdriveStmt(Context\ChdriveStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::closeStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterCloseStmt(Context\CloseStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::closeStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitCloseStmt(Context\CloseStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::constStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterConstStmt(Context\ConstStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::constStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitConstStmt(Context\ConstStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::constSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterConstSubStmt(Context\ConstSubStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::constSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitConstSubStmt(Context\ConstSubStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::dateStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDateStmt(Context\DateStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::dateStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDateStmt(Context\DateStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::declareStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclareStmt(Context\DeclareStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::declareStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclareStmt(Context\DeclareStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::deftypeStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDeftypeStmt(Context\DeftypeStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::deftypeStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDeftypeStmt(Context\DeftypeStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::deleteSettingStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDeleteSettingStmt(Context\DeleteSettingStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::deleteSettingStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDeleteSettingStmt(Context\DeleteSettingStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::doLoopStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDoLoopStmt(Context\DoLoopStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::doLoopStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDoLoopStmt(Context\DoLoopStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::endStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterEndStmt(Context\EndStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::endStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitEndStmt(Context\EndStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::enumerationStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterEnumerationStmt(Context\EnumerationStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::enumerationStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitEnumerationStmt(Context\EnumerationStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::enumerationStmt_Constant()}.
	 * @param $context The parse tree.
	 */
	public function enterEnumerationStmt_Constant(Context\EnumerationStmt_ConstantContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::enumerationStmt_Constant()}.
	 * @param $context The parse tree.
	 */
	public function exitEnumerationStmt_Constant(Context\EnumerationStmt_ConstantContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::eraseStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterEraseStmt(Context\EraseStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::eraseStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitEraseStmt(Context\EraseStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::errorStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterErrorStmt(Context\ErrorStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::errorStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitErrorStmt(Context\ErrorStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::eventStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterEventStmt(Context\EventStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::eventStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitEventStmt(Context\EventStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::exitStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterExitStmt(Context\ExitStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::exitStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitExitStmt(Context\ExitStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::filecopyStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterFilecopyStmt(Context\FilecopyStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::filecopyStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitFilecopyStmt(Context\FilecopyStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::forEachStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForEachStmt(Context\ForEachStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::forEachStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForEachStmt(Context\ForEachStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::forNextStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForNextStmt(Context\ForNextStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::forNextStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForNextStmt(Context\ForNextStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::functionStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionStmt(Context\FunctionStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::functionStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionStmt(Context\FunctionStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::getStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterGetStmt(Context\GetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::getStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitGetStmt(Context\GetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::goSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterGoSubStmt(Context\GoSubStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::goSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitGoSubStmt(Context\GoSubStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::goToStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterGoToStmt(Context\GoToStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::goToStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitGoToStmt(Context\GoToStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `inlineIfThenElse`
	 * labeled alternative in {@see vbaParser::ifThenElseStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterInlineIfThenElse(Context\InlineIfThenElseContext $context): void;
	/**
	 * Exit a parse tree produced by the `inlineIfThenElse` labeled alternative
	 * in {@see vbaParser::ifThenElseStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitInlineIfThenElse(Context\InlineIfThenElseContext $context): void;
	/**
	 * Enter a parse tree produced by the `blockIfThenElse`
	 * labeled alternative in {@see vbaParser::ifThenElseStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterBlockIfThenElse(Context\BlockIfThenElseContext $context): void;
	/**
	 * Exit a parse tree produced by the `blockIfThenElse` labeled alternative
	 * in {@see vbaParser::ifThenElseStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitBlockIfThenElse(Context\BlockIfThenElseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::ifBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfBlockStmt(Context\IfBlockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::ifBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfBlockStmt(Context\IfBlockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::ifConditionStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfConditionStmt(Context\IfConditionStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::ifConditionStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfConditionStmt(Context\IfConditionStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::ifElseIfBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfElseIfBlockStmt(Context\IfElseIfBlockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::ifElseIfBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfElseIfBlockStmt(Context\IfElseIfBlockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::ifElseBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfElseBlockStmt(Context\IfElseBlockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::ifElseBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfElseBlockStmt(Context\IfElseBlockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::implementsStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterImplementsStmt(Context\ImplementsStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::implementsStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitImplementsStmt(Context\ImplementsStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::inputStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterInputStmt(Context\InputStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::inputStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitInputStmt(Context\InputStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::killStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterKillStmt(Context\KillStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::killStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitKillStmt(Context\KillStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::letStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterLetStmt(Context\LetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::letStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitLetStmt(Context\LetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::lineInputStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterLineInputStmt(Context\LineInputStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::lineInputStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitLineInputStmt(Context\LineInputStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::lineNumber()}.
	 * @param $context The parse tree.
	 */
	public function enterLineNumber(Context\LineNumberContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::lineNumber()}.
	 * @param $context The parse tree.
	 */
	public function exitLineNumber(Context\LineNumberContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::loadStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterLoadStmt(Context\LoadStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::loadStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitLoadStmt(Context\LoadStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::lockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterLockStmt(Context\LockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::lockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitLockStmt(Context\LockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::lsetStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterLsetStmt(Context\LsetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::lsetStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitLsetStmt(Context\LsetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::macroConstStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMacroConstStmt(Context\MacroConstStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::macroConstStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMacroConstStmt(Context\MacroConstStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::macroIfThenElseStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMacroIfThenElseStmt(Context\MacroIfThenElseStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::macroIfThenElseStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMacroIfThenElseStmt(Context\MacroIfThenElseStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::macroIfBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMacroIfBlockStmt(Context\MacroIfBlockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::macroIfBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMacroIfBlockStmt(Context\MacroIfBlockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::macroElseIfBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMacroElseIfBlockStmt(Context\MacroElseIfBlockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::macroElseIfBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMacroElseIfBlockStmt(Context\MacroElseIfBlockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::macroElseBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMacroElseBlockStmt(Context\MacroElseBlockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::macroElseBlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMacroElseBlockStmt(Context\MacroElseBlockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::midStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMidStmt(Context\MidStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::midStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMidStmt(Context\MidStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::mkdirStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterMkdirStmt(Context\MkdirStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::mkdirStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitMkdirStmt(Context\MkdirStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::nameStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterNameStmt(Context\NameStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::nameStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitNameStmt(Context\NameStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::onErrorStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterOnErrorStmt(Context\OnErrorStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::onErrorStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitOnErrorStmt(Context\OnErrorStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::onGoToStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterOnGoToStmt(Context\OnGoToStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::onGoToStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitOnGoToStmt(Context\OnGoToStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::onGoSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterOnGoSubStmt(Context\OnGoSubStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::onGoSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitOnGoSubStmt(Context\OnGoSubStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::openStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterOpenStmt(Context\OpenStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::openStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitOpenStmt(Context\OpenStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::outputList()}.
	 * @param $context The parse tree.
	 */
	public function enterOutputList(Context\OutputListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::outputList()}.
	 * @param $context The parse tree.
	 */
	public function exitOutputList(Context\OutputListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::outputList_Expression()}.
	 * @param $context The parse tree.
	 */
	public function enterOutputList_Expression(Context\OutputList_ExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::outputList_Expression()}.
	 * @param $context The parse tree.
	 */
	public function exitOutputList_Expression(Context\OutputList_ExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::printStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPrintStmt(Context\PrintStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::printStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPrintStmt(Context\PrintStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::propertyGetStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPropertyGetStmt(Context\PropertyGetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::propertyGetStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPropertyGetStmt(Context\PropertyGetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::propertySetStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPropertySetStmt(Context\PropertySetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::propertySetStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPropertySetStmt(Context\PropertySetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::propertyLetStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPropertyLetStmt(Context\PropertyLetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::propertyLetStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPropertyLetStmt(Context\PropertyLetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::putStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPutStmt(Context\PutStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::putStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPutStmt(Context\PutStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::raiseEventStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterRaiseEventStmt(Context\RaiseEventStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::raiseEventStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitRaiseEventStmt(Context\RaiseEventStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::randomizeStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterRandomizeStmt(Context\RandomizeStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::randomizeStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitRandomizeStmt(Context\RandomizeStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::redimStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterRedimStmt(Context\RedimStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::redimStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitRedimStmt(Context\RedimStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::redimSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterRedimSubStmt(Context\RedimSubStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::redimSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitRedimSubStmt(Context\RedimSubStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::resetStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterResetStmt(Context\ResetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::resetStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitResetStmt(Context\ResetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::resumeStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterResumeStmt(Context\ResumeStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::resumeStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitResumeStmt(Context\ResumeStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnStmt(Context\ReturnStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnStmt(Context\ReturnStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::rmdirStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterRmdirStmt(Context\RmdirStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::rmdirStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitRmdirStmt(Context\RmdirStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::rsetStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterRsetStmt(Context\RsetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::rsetStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitRsetStmt(Context\RsetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::savepictureStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSavepictureStmt(Context\SavepictureStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::savepictureStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSavepictureStmt(Context\SavepictureStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::saveSettingStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSaveSettingStmt(Context\SaveSettingStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::saveSettingStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSaveSettingStmt(Context\SaveSettingStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::seekStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSeekStmt(Context\SeekStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::seekStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSeekStmt(Context\SeekStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::selectCaseStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSelectCaseStmt(Context\SelectCaseStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::selectCaseStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSelectCaseStmt(Context\SelectCaseStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `caseCondIs`
	 * labeled alternative in {@see vbaParser::sC_Selection()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseCondIs(Context\CaseCondIsContext $context): void;
	/**
	 * Exit a parse tree produced by the `caseCondIs` labeled alternative
	 * in {@see vbaParser::sC_Selection()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseCondIs(Context\CaseCondIsContext $context): void;
	/**
	 * Enter a parse tree produced by the `caseCondTo`
	 * labeled alternative in {@see vbaParser::sC_Selection()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseCondTo(Context\CaseCondToContext $context): void;
	/**
	 * Exit a parse tree produced by the `caseCondTo` labeled alternative
	 * in {@see vbaParser::sC_Selection()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseCondTo(Context\CaseCondToContext $context): void;
	/**
	 * Enter a parse tree produced by the `caseCondValue`
	 * labeled alternative in {@see vbaParser::sC_Selection()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseCondValue(Context\CaseCondValueContext $context): void;
	/**
	 * Exit a parse tree produced by the `caseCondValue` labeled alternative
	 * in {@see vbaParser::sC_Selection()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseCondValue(Context\CaseCondValueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::sC_Case()}.
	 * @param $context The parse tree.
	 */
	public function enterSC_Case(Context\SC_CaseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::sC_Case()}.
	 * @param $context The parse tree.
	 */
	public function exitSC_Case(Context\SC_CaseContext $context): void;
	/**
	 * Enter a parse tree produced by the `caseCondElse`
	 * labeled alternative in {@see vbaParser::sC_Cond()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseCondElse(Context\CaseCondElseContext $context): void;
	/**
	 * Exit a parse tree produced by the `caseCondElse` labeled alternative
	 * in {@see vbaParser::sC_Cond()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseCondElse(Context\CaseCondElseContext $context): void;
	/**
	 * Enter a parse tree produced by the `caseCondSelection`
	 * labeled alternative in {@see vbaParser::sC_Cond()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseCondSelection(Context\CaseCondSelectionContext $context): void;
	/**
	 * Exit a parse tree produced by the `caseCondSelection` labeled alternative
	 * in {@see vbaParser::sC_Cond()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseCondSelection(Context\CaseCondSelectionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::sendkeysStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSendkeysStmt(Context\SendkeysStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::sendkeysStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSendkeysStmt(Context\SendkeysStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::setattrStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSetattrStmt(Context\SetattrStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::setattrStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSetattrStmt(Context\SetattrStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::setStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSetStmt(Context\SetStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::setStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSetStmt(Context\SetStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::stopStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterStopStmt(Context\StopStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::stopStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitStopStmt(Context\StopStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::subStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSubStmt(Context\SubStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::subStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSubStmt(Context\SubStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::timeStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterTimeStmt(Context\TimeStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::timeStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitTimeStmt(Context\TimeStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::typeStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeStmt(Context\TypeStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::typeStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeStmt(Context\TypeStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::typeStmt_Element()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeStmt_Element(Context\TypeStmt_ElementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::typeStmt_Element()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeStmt_Element(Context\TypeStmt_ElementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::typeOfStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeOfStmt(Context\TypeOfStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::typeOfStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeOfStmt(Context\TypeOfStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::unloadStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterUnloadStmt(Context\UnloadStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::unloadStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitUnloadStmt(Context\UnloadStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::unlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterUnlockStmt(Context\UnlockStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::unlockStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitUnlockStmt(Context\UnlockStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsAssign`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsAssign(Context\VsAssignContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsAssign` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsAssign(Context\VsAssignContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsPlus`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsPlus(Context\VsPlusContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsPlus` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsPlus(Context\VsPlusContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsNot`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsNot(Context\VsNotContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsNot` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsNot(Context\VsNotContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsStruct`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsStruct(Context\VsStructContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsStruct` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsStruct(Context\VsStructContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsTypeOf`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsTypeOf(Context\VsTypeOfContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsTypeOf` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsTypeOf(Context\VsTypeOfContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsICS`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsICS(Context\VsICSContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsICS` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsICS(Context\VsICSContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsRelational`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsRelational(Context\VsRelationalContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsRelational` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsRelational(Context\VsRelationalContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsAddMinus`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsAddMinus(Context\VsAddMinusContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsAddMinus` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsAddMinus(Context\VsAddMinusContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsXor`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsXor(Context\VsXorContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsXor` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsXor(Context\VsXorContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsDivMult`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsDivMult(Context\VsDivMultContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsDivMult` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsDivMult(Context\VsDivMultContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsAnd`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsAnd(Context\VsAndContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsAnd` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsAnd(Context\VsAndContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsPow`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsPow(Context\VsPowContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsPow` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsPow(Context\VsPowContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsMod`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsMod(Context\VsModContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsMod` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsMod(Context\VsModContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsAmp`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsAmp(Context\VsAmpContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsAmp` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsAmp(Context\VsAmpContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsAddressOf`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsAddressOf(Context\VsAddressOfContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsAddressOf` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsAddressOf(Context\VsAddressOfContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsNew`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsNew(Context\VsNewContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsNew` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsNew(Context\VsNewContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsOr`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsOr(Context\VsOrContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsOr` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsOr(Context\VsOrContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsLiteral`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsLiteral(Context\VsLiteralContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsLiteral` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsLiteral(Context\VsLiteralContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsEqv`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsEqv(Context\VsEqvContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsEqv` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsEqv(Context\VsEqvContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsNegation`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsNegation(Context\VsNegationContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsNegation` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsNegation(Context\VsNegationContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsImp`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsImp(Context\VsImpContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsImp` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsImp(Context\VsImpContext $context): void;
	/**
	 * Enter a parse tree produced by the `vsMid`
	 * labeled alternative in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVsMid(Context\VsMidContext $context): void;
	/**
	 * Exit a parse tree produced by the `vsMid` labeled alternative
	 * in {@see vbaParser::valueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVsMid(Context\VsMidContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::variableStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVariableStmt(Context\VariableStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::variableStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVariableStmt(Context\VariableStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::variableListStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVariableListStmt(Context\VariableListStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::variableListStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVariableListStmt(Context\VariableListStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::variableSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVariableSubStmt(Context\VariableSubStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::variableSubStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVariableSubStmt(Context\VariableSubStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::whileWendStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterWhileWendStmt(Context\WhileWendStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::whileWendStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitWhileWendStmt(Context\WhileWendStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::widthStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterWidthStmt(Context\WidthStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::widthStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitWidthStmt(Context\WidthStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::withStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterWithStmt(Context\WithStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::withStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitWithStmt(Context\WithStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::writeStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterWriteStmt(Context\WriteStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::writeStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitWriteStmt(Context\WriteStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::fileNumber()}.
	 * @param $context The parse tree.
	 */
	public function enterFileNumber(Context\FileNumberContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::fileNumber()}.
	 * @param $context The parse tree.
	 */
	public function exitFileNumber(Context\FileNumberContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::explicitCallStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterExplicitCallStmt(Context\ExplicitCallStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::explicitCallStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitExplicitCallStmt(Context\ExplicitCallStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::eCS_ProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function enterECS_ProcedureCall(Context\ECS_ProcedureCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::eCS_ProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function exitECS_ProcedureCall(Context\ECS_ProcedureCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::eCS_MemberProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function enterECS_MemberProcedureCall(Context\ECS_MemberProcedureCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::eCS_MemberProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function exitECS_MemberProcedureCall(Context\ECS_MemberProcedureCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::implicitCallStmt_InBlock()}.
	 * @param $context The parse tree.
	 */
	public function enterImplicitCallStmt_InBlock(Context\ImplicitCallStmt_InBlockContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::implicitCallStmt_InBlock()}.
	 * @param $context The parse tree.
	 */
	public function exitImplicitCallStmt_InBlock(Context\ImplicitCallStmt_InBlockContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::iCS_B_MemberProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function enterICS_B_MemberProcedureCall(Context\ICS_B_MemberProcedureCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::iCS_B_MemberProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function exitICS_B_MemberProcedureCall(Context\ICS_B_MemberProcedureCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::iCS_B_ProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function enterICS_B_ProcedureCall(Context\ICS_B_ProcedureCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::iCS_B_ProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function exitICS_B_ProcedureCall(Context\ICS_B_ProcedureCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::implicitCallStmt_InStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterImplicitCallStmt_InStmt(Context\ImplicitCallStmt_InStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::implicitCallStmt_InStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitImplicitCallStmt_InStmt(Context\ImplicitCallStmt_InStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::iCS_S_VariableOrProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function enterICS_S_VariableOrProcedureCall(Context\ICS_S_VariableOrProcedureCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::iCS_S_VariableOrProcedureCall()}.
	 * @param $context The parse tree.
	 */
	public function exitICS_S_VariableOrProcedureCall(Context\ICS_S_VariableOrProcedureCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::iCS_S_ProcedureOrArrayCall()}.
	 * @param $context The parse tree.
	 */
	public function enterICS_S_ProcedureOrArrayCall(Context\ICS_S_ProcedureOrArrayCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::iCS_S_ProcedureOrArrayCall()}.
	 * @param $context The parse tree.
	 */
	public function exitICS_S_ProcedureOrArrayCall(Context\ICS_S_ProcedureOrArrayCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::iCS_S_MembersCall()}.
	 * @param $context The parse tree.
	 */
	public function enterICS_S_MembersCall(Context\ICS_S_MembersCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::iCS_S_MembersCall()}.
	 * @param $context The parse tree.
	 */
	public function exitICS_S_MembersCall(Context\ICS_S_MembersCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::iCS_S_MemberCall()}.
	 * @param $context The parse tree.
	 */
	public function enterICS_S_MemberCall(Context\ICS_S_MemberCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::iCS_S_MemberCall()}.
	 * @param $context The parse tree.
	 */
	public function exitICS_S_MemberCall(Context\ICS_S_MemberCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::iCS_S_DictionaryCall()}.
	 * @param $context The parse tree.
	 */
	public function enterICS_S_DictionaryCall(Context\ICS_S_DictionaryCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::iCS_S_DictionaryCall()}.
	 * @param $context The parse tree.
	 */
	public function exitICS_S_DictionaryCall(Context\ICS_S_DictionaryCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::argsCall()}.
	 * @param $context The parse tree.
	 */
	public function enterArgsCall(Context\ArgsCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::argsCall()}.
	 * @param $context The parse tree.
	 */
	public function exitArgsCall(Context\ArgsCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::argCall()}.
	 * @param $context The parse tree.
	 */
	public function enterArgCall(Context\ArgCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::argCall()}.
	 * @param $context The parse tree.
	 */
	public function exitArgCall(Context\ArgCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::dictionaryCallStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDictionaryCallStmt(Context\DictionaryCallStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::dictionaryCallStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDictionaryCallStmt(Context\DictionaryCallStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::argList()}.
	 * @param $context The parse tree.
	 */
	public function enterArgList(Context\ArgListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::argList()}.
	 * @param $context The parse tree.
	 */
	public function exitArgList(Context\ArgListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::arg()}.
	 * @param $context The parse tree.
	 */
	public function enterArg(Context\ArgContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::arg()}.
	 * @param $context The parse tree.
	 */
	public function exitArg(Context\ArgContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::argDefaultValue()}.
	 * @param $context The parse tree.
	 */
	public function enterArgDefaultValue(Context\ArgDefaultValueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::argDefaultValue()}.
	 * @param $context The parse tree.
	 */
	public function exitArgDefaultValue(Context\ArgDefaultValueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::subscripts()}.
	 * @param $context The parse tree.
	 */
	public function enterSubscripts(Context\SubscriptsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::subscripts()}.
	 * @param $context The parse tree.
	 */
	public function exitSubscripts(Context\SubscriptsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::subscript_()}.
	 * @param $context The parse tree.
	 */
	public function enterSubscript_(Context\Subscript_Context $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::subscript_()}.
	 * @param $context The parse tree.
	 */
	public function exitSubscript_(Context\Subscript_Context $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::ambiguousIdentifier()}.
	 * @param $context The parse tree.
	 */
	public function enterAmbiguousIdentifier(Context\AmbiguousIdentifierContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::ambiguousIdentifier()}.
	 * @param $context The parse tree.
	 */
	public function exitAmbiguousIdentifier(Context\AmbiguousIdentifierContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::asTypeClause()}.
	 * @param $context The parse tree.
	 */
	public function enterAsTypeClause(Context\AsTypeClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::asTypeClause()}.
	 * @param $context The parse tree.
	 */
	public function exitAsTypeClause(Context\AsTypeClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::baseType()}.
	 * @param $context The parse tree.
	 */
	public function enterBaseType(Context\BaseTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::baseType()}.
	 * @param $context The parse tree.
	 */
	public function exitBaseType(Context\BaseTypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::certainIdentifier()}.
	 * @param $context The parse tree.
	 */
	public function enterCertainIdentifier(Context\CertainIdentifierContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::certainIdentifier()}.
	 * @param $context The parse tree.
	 */
	public function exitCertainIdentifier(Context\CertainIdentifierContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::comparisonOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterComparisonOperator(Context\ComparisonOperatorContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::comparisonOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitComparisonOperator(Context\ComparisonOperatorContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::complexType()}.
	 * @param $context The parse tree.
	 */
	public function enterComplexType(Context\ComplexTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::complexType()}.
	 * @param $context The parse tree.
	 */
	public function exitComplexType(Context\ComplexTypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::fieldLength()}.
	 * @param $context The parse tree.
	 */
	public function enterFieldLength(Context\FieldLengthContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::fieldLength()}.
	 * @param $context The parse tree.
	 */
	public function exitFieldLength(Context\FieldLengthContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::letterrange()}.
	 * @param $context The parse tree.
	 */
	public function enterLetterrange(Context\LetterrangeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::letterrange()}.
	 * @param $context The parse tree.
	 */
	public function exitLetterrange(Context\LetterrangeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::lineLabel()}.
	 * @param $context The parse tree.
	 */
	public function enterLineLabel(Context\LineLabelContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::lineLabel()}.
	 * @param $context The parse tree.
	 */
	public function exitLineLabel(Context\LineLabelContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::type_()}.
	 * @param $context The parse tree.
	 */
	public function enterType_(Context\Type_Context $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::type_()}.
	 * @param $context The parse tree.
	 */
	public function exitType_(Context\Type_Context $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::typeHint()}.
	 * @param $context The parse tree.
	 */
	public function enterTypeHint(Context\TypeHintContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::typeHint()}.
	 * @param $context The parse tree.
	 */
	public function exitTypeHint(Context\TypeHintContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::visibility()}.
	 * @param $context The parse tree.
	 */
	public function enterVisibility(Context\VisibilityContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::visibility()}.
	 * @param $context The parse tree.
	 */
	public function exitVisibility(Context\VisibilityContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::ambiguousKeyword()}.
	 * @param $context The parse tree.
	 */
	public function enterAmbiguousKeyword(Context\AmbiguousKeywordContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::ambiguousKeyword()}.
	 * @param $context The parse tree.
	 */
	public function exitAmbiguousKeyword(Context\AmbiguousKeywordContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::remComment()}.
	 * @param $context The parse tree.
	 */
	public function enterRemComment(Context\RemCommentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::remComment()}.
	 * @param $context The parse tree.
	 */
	public function exitRemComment(Context\RemCommentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::comment()}.
	 * @param $context The parse tree.
	 */
	public function enterComment(Context\CommentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::comment()}.
	 * @param $context The parse tree.
	 */
	public function exitComment(Context\CommentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::endOfLine()}.
	 * @param $context The parse tree.
	 */
	public function enterEndOfLine(Context\EndOfLineContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::endOfLine()}.
	 * @param $context The parse tree.
	 */
	public function exitEndOfLine(Context\EndOfLineContext $context): void;
	/**
	 * Enter a parse tree produced by {@see vbaParser::endOfStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterEndOfStatement(Context\EndOfStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see vbaParser::endOfStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitEndOfStatement(Context\EndOfStatementContext $context): void;
}