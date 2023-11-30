<?php

namespace App\Parsers\Vba;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

class VbaTreeListenerBase implements vbaListener
{
    public function visitTerminal(TerminalNode $node): void
    {
    }
    public function visitErrorNode(ErrorNode $node): void
    {
    }

    public function enterEveryRule(ParserRuleContext $ctx): void
    {
    }

    public function exitEveryRule(ParserRuleContext $ctx): void
    {
    }

    public function enterStartRule(Context\StartRuleContext $context): void
    {
    }
    public function exitStartRule(Context\StartRuleContext $context): void
    {
    }
    public function enterModule(Context\ModuleContext $context): void
    {
    }
    public function exitModule(Context\ModuleContext $context): void
    {
    }
    public function enterModuleHeader(Context\ModuleHeaderContext $context): void
    {
    }
    public function exitModuleHeader(Context\ModuleHeaderContext $context): void
    {
    }
    public function enterModuleConfig(Context\ModuleConfigContext $context): void
    {
    }
    public function exitModuleConfig(Context\ModuleConfigContext $context): void
    {
    }
    public function enterModuleConfigElement(Context\ModuleConfigElementContext $context): void
    {
    }
    public function exitModuleConfigElement(Context\ModuleConfigElementContext $context): void
    {
    }
    public function enterModuleAttributes(Context\ModuleAttributesContext $context): void
    {
    }
    public function exitModuleAttributes(Context\ModuleAttributesContext $context): void
    {
    }
    public function enterModuleDeclarations(Context\ModuleDeclarationsContext $context): void
    {
    }
    public function exitModuleDeclarations(Context\ModuleDeclarationsContext $context): void
    {
    }
    public function enterOptionBaseStmt(Context\OptionBaseStmtContext $context): void
    {
    }

    public function exitOptionBaseStmt(Context\OptionBaseStmtContext $context): void
    {
    }

    public function enterOptionCompareStmt(Context\OptionCompareStmtContext $context): void
    {
    }

    public function exitOptionCompareStmt(Context\OptionCompareStmtContext $context): void
    {
    }

    public function enterOptionExplicitStmt(Context\OptionExplicitStmtContext $context): void
    {
    }

    public function exitOptionExplicitStmt(Context\OptionExplicitStmtContext $context): void
    {
    }

    public function enterOptionPrivateModuleStmt(Context\OptionPrivateModuleStmtContext $context): void
    {
    }

    public function exitOptionPrivateModuleStmt(Context\OptionPrivateModuleStmtContext $context): void
    {
    }

    public function enterModuleDeclarationsElement(Context\ModuleDeclarationsElementContext $context): void
    {
    }

    public function exitModuleDeclarationsElement(Context\ModuleDeclarationsElementContext $context): void
    {
    }

    public function enterMacroStmt(Context\MacroStmtContext $context): void
    {
    }

    public function exitMacroStmt(Context\MacroStmtContext $context): void
    {
    }

    public function enterModuleBody(Context\ModuleBodyContext $context): void
    {
    }

    public function exitModuleBody(Context\ModuleBodyContext $context): void
    {
    }

    public function enterModuleBodyElement(Context\ModuleBodyElementContext $context): void
    {
    }

    public function exitModuleBodyElement(Context\ModuleBodyElementContext $context): void
    {
    }

    public function enterAttributeStmt(Context\AttributeStmtContext $context): void
    {
    }

    public function exitAttributeStmt(Context\AttributeStmtContext $context): void
    {
    }

    public function enterBlock(Context\BlockContext $context): void
    {
    }

    public function exitBlock(Context\BlockContext $context): void
    {
    }

    public function enterBlockStmt(Context\BlockStmtContext $context): void
    {
    }

    public function exitBlockStmt(Context\BlockStmtContext $context): void
    {
    }

    public function enterAppactivateStmt(Context\AppactivateStmtContext $context): void
    {
    }

    public function exitAppactivateStmt(Context\AppactivateStmtContext $context): void
    {
    }

    public function enterBeepStmt(Context\BeepStmtContext $context): void
    {
    }

    public function exitBeepStmt(Context\BeepStmtContext $context): void
    {
    }

    public function enterChdirStmt(Context\ChdirStmtContext $context): void
    {
    }

    public function exitChdirStmt(Context\ChdirStmtContext $context): void
    {
    }

    public function enterChdriveStmt(Context\ChdriveStmtContext $context): void
    {
    }

    public function exitChdriveStmt(Context\ChdriveStmtContext $context): void
    {
    }

    public function enterCloseStmt(Context\CloseStmtContext $context): void
    {
    }

    public function exitCloseStmt(Context\CloseStmtContext $context): void
    {
    }

    public function enterConstStmt(Context\ConstStmtContext $context): void
    {
    }

    public function exitConstStmt(Context\ConstStmtContext $context): void
    {
    }

    public function enterConstSubStmt(Context\ConstSubStmtContext $context): void
    {
    }

    public function exitConstSubStmt(Context\ConstSubStmtContext $context): void
    {
    }

    public function enterDateStmt(Context\DateStmtContext $context): void
    {
    }

    public function exitDateStmt(Context\DateStmtContext $context): void
    {
    }

    public function enterDeclareStmt(Context\DeclareStmtContext $context): void
    {
    }

    public function exitDeclareStmt(Context\DeclareStmtContext $context): void
    {
    }

    public function enterDeftypeStmt(Context\DeftypeStmtContext $context): void
    {
    }

    public function exitDeftypeStmt(Context\DeftypeStmtContext $context): void
    {
    }

    public function enterDeleteSettingStmt(Context\DeleteSettingStmtContext $context): void
    {
    }

    public function exitDeleteSettingStmt(Context\DeleteSettingStmtContext $context): void
    {
    }

    public function enterDoLoopStmt(Context\DoLoopStmtContext $context): void
    {
    }

    public function exitDoLoopStmt(Context\DoLoopStmtContext $context): void
    {
    }

    public function enterEndStmt(Context\EndStmtContext $context): void
    {
    }

    public function exitEndStmt(Context\EndStmtContext $context): void
    {
    }

    public function enterEnumerationStmt(Context\EnumerationStmtContext $context): void
    {
    }

    public function exitEnumerationStmt(Context\EnumerationStmtContext $context): void
    {
    }

    public function enterEnumerationStmt_Constant(Context\EnumerationStmt_ConstantContext $context): void
    {
    }

    public function exitEnumerationStmt_Constant(Context\EnumerationStmt_ConstantContext $context): void
    {
    }

    public function enterEraseStmt(Context\EraseStmtContext $context): void
    {
    }

    public function exitEraseStmt(Context\EraseStmtContext $context): void
    {
    }

    public function enterErrorStmt(Context\ErrorStmtContext $context): void
    {
    }

    public function exitErrorStmt(Context\ErrorStmtContext $context): void
    {
    }

    public function enterEventStmt(Context\EventStmtContext $context): void
    {
    }

    public function exitEventStmt(Context\EventStmtContext $context): void
    {
    }

    public function enterExitStmt(Context\ExitStmtContext $context): void
    {
    }

    public function exitExitStmt(Context\ExitStmtContext $context): void
    {
    }

    public function enterFilecopyStmt(Context\FilecopyStmtContext $context): void
    {
    }

    public function exitFilecopyStmt(Context\FilecopyStmtContext $context): void
    {
    }

    public function enterForEachStmt(Context\ForEachStmtContext $context): void
    {
    }

    public function exitForEachStmt(Context\ForEachStmtContext $context): void
    {
    }

    public function enterForNextStmt(Context\ForNextStmtContext $context): void
    {
    }

    public function exitForNextStmt(Context\ForNextStmtContext $context): void
    {
    }

    public function enterFunctionStmt(Context\FunctionStmtContext $context): void
    {
    }

    public function exitFunctionStmt(Context\FunctionStmtContext $context): void
    {
    }

    public function enterGetStmt(Context\GetStmtContext $context): void
    {
    }

    public function exitGetStmt(Context\GetStmtContext $context): void
    {
    }

    public function enterGoSubStmt(Context\GoSubStmtContext $context): void
    {
    }

    public function exitGoSubStmt(Context\GoSubStmtContext $context): void
    {
    }

    public function enterGoToStmt(Context\GoToStmtContext $context): void
    {
    }

    public function exitGoToStmt(Context\GoToStmtContext $context): void
    {
    }

    public function enterInlineIfThenElse(Context\InlineIfThenElseContext $context): void
    {
    }

    public function exitInlineIfThenElse(Context\InlineIfThenElseContext $context): void
    {
    }

    public function enterBlockIfThenElse(Context\BlockIfThenElseContext $context): void
    {
    }

    public function exitBlockIfThenElse(Context\BlockIfThenElseContext $context): void
    {
    }

    public function enterIfBlockStmt(Context\IfBlockStmtContext $context): void
    {
    }

    public function exitIfBlockStmt(Context\IfBlockStmtContext $context): void
    {
    }

    public function enterIfConditionStmt(Context\IfConditionStmtContext $context): void
    {
    }

    public function exitIfConditionStmt(Context\IfConditionStmtContext $context): void
    {
    }

    public function enterIfElseIfBlockStmt(Context\IfElseIfBlockStmtContext $context): void
    {
    }

    public function exitIfElseIfBlockStmt(Context\IfElseIfBlockStmtContext $context): void
    {
    }

    public function enterIfElseBlockStmt(Context\IfElseBlockStmtContext $context): void
    {
    }

    public function exitIfElseBlockStmt(Context\IfElseBlockStmtContext $context): void
    {
    }

    public function enterImplementsStmt(Context\ImplementsStmtContext $context): void
    {
    }

    public function exitImplementsStmt(Context\ImplementsStmtContext $context): void
    {
    }

    public function enterInputStmt(Context\InputStmtContext $context): void
    {
    }

    public function exitInputStmt(Context\InputStmtContext $context): void
    {
    }

    public function enterKillStmt(Context\KillStmtContext $context): void
    {
    }

    public function exitKillStmt(Context\KillStmtContext $context): void
    {
    }

    public function enterLetStmt(Context\LetStmtContext $context): void
    {
    }

    public function exitLetStmt(Context\LetStmtContext $context): void
    {
    }

    public function enterLineInputStmt(Context\LineInputStmtContext $context): void
    {
    }

    public function exitLineInputStmt(Context\LineInputStmtContext $context): void
    {
    }

    public function enterLineNumber(Context\LineNumberContext $context): void
    {
    }

    public function exitLineNumber(Context\LineNumberContext $context): void
    {
    }

    public function enterLoadStmt(Context\LoadStmtContext $context): void
    {
    }

    public function exitLoadStmt(Context\LoadStmtContext $context): void
    {
    }

    public function enterLockStmt(Context\LockStmtContext $context): void
    {
    }

    public function exitLockStmt(Context\LockStmtContext $context): void
    {
    }

    public function enterLsetStmt(Context\LsetStmtContext $context): void
    {
    }

    public function exitLsetStmt(Context\LsetStmtContext $context): void
    {
    }

    public function enterMacroConstStmt(Context\MacroConstStmtContext $context): void
    {
    }

    public function exitMacroConstStmt(Context\MacroConstStmtContext $context): void
    {
    }

    public function enterMacroIfThenElseStmt(Context\MacroIfThenElseStmtContext $context): void
    {
    }

    public function exitMacroIfThenElseStmt(Context\MacroIfThenElseStmtContext $context): void
    {
    }

    public function enterMacroIfBlockStmt(Context\MacroIfBlockStmtContext $context): void
    {
    }

    public function exitMacroIfBlockStmt(Context\MacroIfBlockStmtContext $context): void
    {
    }

    public function enterMacroElseIfBlockStmt(Context\MacroElseIfBlockStmtContext $context): void
    {
    }

    public function exitMacroElseIfBlockStmt(Context\MacroElseIfBlockStmtContext $context): void
    {
    }

    public function enterMacroElseBlockStmt(Context\MacroElseBlockStmtContext $context): void
    {
    }

    public function exitMacroElseBlockStmt(Context\MacroElseBlockStmtContext $context): void
    {
    }

    public function enterMidStmt(Context\MidStmtContext $context): void
    {
    }

    public function exitMidStmt(Context\MidStmtContext $context): void
    {
    }

    public function enterMkdirStmt(Context\MkdirStmtContext $context): void
    {
    }

    public function exitMkdirStmt(Context\MkdirStmtContext $context): void
    {
    }

    public function enterNameStmt(Context\NameStmtContext $context): void
    {
    }

    public function exitNameStmt(Context\NameStmtContext $context): void
    {
    }

    public function enterOnErrorStmt(Context\OnErrorStmtContext $context): void
    {
    }

    public function exitOnErrorStmt(Context\OnErrorStmtContext $context): void
    {
    }

    public function enterOnGoToStmt(Context\OnGoToStmtContext $context): void
    {
    }

    public function exitOnGoToStmt(Context\OnGoToStmtContext $context): void
    {
    }

    public function enterOnGoSubStmt(Context\OnGoSubStmtContext $context): void
    {
    }

    public function exitOnGoSubStmt(Context\OnGoSubStmtContext $context): void
    {
    }

    public function enterOpenStmt(Context\OpenStmtContext $context): void
    {
    }

    public function exitOpenStmt(Context\OpenStmtContext $context): void
    {
    }

    public function enterOutputList(Context\OutputListContext $context): void
    {
    }

    public function exitOutputList(Context\OutputListContext $context): void
    {
    }

    public function enterOutputList_Expression(Context\OutputList_ExpressionContext $context): void
    {
    }

    public function exitOutputList_Expression(Context\OutputList_ExpressionContext $context): void
    {
    }

    public function enterPrintStmt(Context\PrintStmtContext $context): void
    {
    }

    public function exitPrintStmt(Context\PrintStmtContext $context): void
    {
    }

    public function enterPropertyGetStmt(Context\PropertyGetStmtContext $context): void
    {
    }

    public function exitPropertyGetStmt(Context\PropertyGetStmtContext $context): void
    {
    }

    public function enterPropertySetStmt(Context\PropertySetStmtContext $context): void
    {
    }

    public function exitPropertySetStmt(Context\PropertySetStmtContext $context): void
    {
    }

    public function enterPropertyLetStmt(Context\PropertyLetStmtContext $context): void
    {
    }

    public function exitPropertyLetStmt(Context\PropertyLetStmtContext $context): void
    {
    }

    public function enterPutStmt(Context\PutStmtContext $context): void
    {
    }

    public function exitPutStmt(Context\PutStmtContext $context): void
    {
    }

    public function enterRaiseEventStmt(Context\RaiseEventStmtContext $context): void
    {
    }

    public function exitRaiseEventStmt(Context\RaiseEventStmtContext $context): void
    {
    }

    public function enterRandomizeStmt(Context\RandomizeStmtContext $context): void
    {
    }

    public function exitRandomizeStmt(Context\RandomizeStmtContext $context): void
    {
    }

    public function enterRedimStmt(Context\RedimStmtContext $context): void
    {
    }

    public function exitRedimStmt(Context\RedimStmtContext $context): void
    {
    }

    public function enterRedimSubStmt(Context\RedimSubStmtContext $context): void
    {
    }

    public function exitRedimSubStmt(Context\RedimSubStmtContext $context): void
    {
    }

    public function enterResetStmt(Context\ResetStmtContext $context): void
    {
    }

    public function exitResetStmt(Context\ResetStmtContext $context): void
    {
    }

    public function enterResumeStmt(Context\ResumeStmtContext $context): void
    {
    }

    public function exitResumeStmt(Context\ResumeStmtContext $context): void
    {
    }

    public function enterReturnStmt(Context\ReturnStmtContext $context): void
    {
    }

    public function exitReturnStmt(Context\ReturnStmtContext $context): void
    {
    }

    public function enterRmdirStmt(Context\RmdirStmtContext $context): void
    {
    }

    public function exitRmdirStmt(Context\RmdirStmtContext $context): void
    {
    }

    public function enterRsetStmt(Context\RsetStmtContext $context): void
    {
    }

    public function exitRsetStmt(Context\RsetStmtContext $context): void
    {
    }

    public function enterSavepictureStmt(Context\SavepictureStmtContext $context): void
    {
    }

    public function exitSavepictureStmt(Context\SavepictureStmtContext $context): void
    {
    }

    public function enterSaveSettingStmt(Context\SaveSettingStmtContext $context): void
    {
    }

    public function exitSaveSettingStmt(Context\SaveSettingStmtContext $context): void
    {
    }

    public function enterSeekStmt(Context\SeekStmtContext $context): void
    {
    }

    public function exitSeekStmt(Context\SeekStmtContext $context): void
    {
    }

    public function enterSelectCaseStmt(Context\SelectCaseStmtContext $context): void
    {
    }

    public function exitSelectCaseStmt(Context\SelectCaseStmtContext $context): void
    {
    }

    public function enterCaseCondIs(Context\CaseCondIsContext $context): void
    {
    }

    public function exitCaseCondIs(Context\CaseCondIsContext $context): void
    {
    }

    public function enterCaseCondTo(Context\CaseCondToContext $context): void
    {
    }

    public function exitCaseCondTo(Context\CaseCondToContext $context): void
    {
    }

    public function enterCaseCondValue(Context\CaseCondValueContext $context): void
    {
    }

    public function exitCaseCondValue(Context\CaseCondValueContext $context): void
    {
    }

    public function enterSC_Case(Context\SC_CaseContext $context): void
    {
    }

    public function exitSC_Case(Context\SC_CaseContext $context): void
    {
    }

    public function enterCaseCondElse(Context\CaseCondElseContext $context): void
    {
    }

    public function exitCaseCondElse(Context\CaseCondElseContext $context): void
    {
    }

    public function enterCaseCondSelection(Context\CaseCondSelectionContext $context): void
    {
    }

    public function exitCaseCondSelection(Context\CaseCondSelectionContext $context): void
    {
    }

    public function enterSendkeysStmt(Context\SendkeysStmtContext $context): void
    {
    }

    public function exitSendkeysStmt(Context\SendkeysStmtContext $context): void
    {
    }

    public function enterSetattrStmt(Context\SetattrStmtContext $context): void
    {
    }

    public function exitSetattrStmt(Context\SetattrStmtContext $context): void
    {
    }

    public function enterSetStmt(Context\SetStmtContext $context): void
    {
    }

    public function exitSetStmt(Context\SetStmtContext $context): void
    {
    }

    public function enterStopStmt(Context\StopStmtContext $context): void
    {
    }

    public function exitStopStmt(Context\StopStmtContext $context): void
    {
    }

    public function enterSubStmt(Context\SubStmtContext $context): void
    {
    }

    public function exitSubStmt(Context\SubStmtContext $context): void
    {
    }

    public function enterTimeStmt(Context\TimeStmtContext $context): void
    {
    }

    public function exitTimeStmt(Context\TimeStmtContext $context): void
    {
    }

    public function enterTypeStmt(Context\TypeStmtContext $context): void
    {
    }

    public function exitTypeStmt(Context\TypeStmtContext $context): void
    {
    }

    public function enterTypeStmt_Element(Context\TypeStmt_ElementContext $context): void
    {
    }

    public function exitTypeStmt_Element(Context\TypeStmt_ElementContext $context): void
    {
    }

    public function enterTypeOfStmt(Context\TypeOfStmtContext $context): void
    {
    }

    public function exitTypeOfStmt(Context\TypeOfStmtContext $context): void
    {
    }

    public function enterUnloadStmt(Context\UnloadStmtContext $context): void
    {
    }

    public function exitUnloadStmt(Context\UnloadStmtContext $context): void
    {
    }

    public function enterUnlockStmt(Context\UnlockStmtContext $context): void
    {
    }

    public function exitUnlockStmt(Context\UnlockStmtContext $context): void
    {
    }

    public function enterVsAssign(Context\VsAssignContext $context): void
    {
    }

    public function exitVsAssign(Context\VsAssignContext $context): void
    {
    }

    public function enterVsPlus(Context\VsPlusContext $context): void
    {
    }

    public function exitVsPlus(Context\VsPlusContext $context): void
    {
    }

    public function enterVsNot(Context\VsNotContext $context): void
    {
    }

    public function exitVsNot(Context\VsNotContext $context): void
    {
    }

    public function enterVsStruct(Context\VsStructContext $context): void
    {
    }

    public function exitVsStruct(Context\VsStructContext $context): void
    {
    }

    public function enterVsTypeOf(Context\VsTypeOfContext $context): void
    {
    }

    public function exitVsTypeOf(Context\VsTypeOfContext $context): void
    {
    }

    public function enterVsICS(Context\VsICSContext $context): void
    {
    }

    public function exitVsICS(Context\VsICSContext $context): void
    {
    }

    public function enterVsRelational(Context\VsRelationalContext $context): void
    {
    }

    public function exitVsRelational(Context\VsRelationalContext $context): void
    {
    }

    public function enterVsAddMinus(Context\VsAddMinusContext $context): void
    {
    }

    public function exitVsAddMinus(Context\VsAddMinusContext $context): void
    {
    }

    public function enterVsXor(Context\VsXorContext $context): void
    {
    }

    public function exitVsXor(Context\VsXorContext $context): void
    {
    }

    public function enterVsDivMult(Context\VsDivMultContext $context): void
    {
    }

    public function exitVsDivMult(Context\VsDivMultContext $context): void
    {
    }

    public function enterVsAnd(Context\VsAndContext $context): void
    {
    }

    public function exitVsAnd(Context\VsAndContext $context): void
    {
    }

    public function enterVsPow(Context\VsPowContext $context): void
    {
    }

    public function exitVsPow(Context\VsPowContext $context): void
    {
    }

    public function enterVsMod(Context\VsModContext $context): void
    {
    }

    public function exitVsMod(Context\VsModContext $context): void
    {
    }

    public function enterVsAmp(Context\VsAmpContext $context): void
    {
    }

    public function exitVsAmp(Context\VsAmpContext $context): void
    {
    }

    public function enterVsAddressOf(Context\VsAddressOfContext $context): void
    {
    }

    public function exitVsAddressOf(Context\VsAddressOfContext $context): void
    {
    }

    public function enterVsNew(Context\VsNewContext $context): void
    {
    }

    public function exitVsNew(Context\VsNewContext $context): void
    {
    }

    public function enterVsOr(Context\VsOrContext $context): void
    {
    }

    public function exitVsOr(Context\VsOrContext $context): void
    {
    }

    public function enterVsLiteral(Context\VsLiteralContext $context): void
    {
    }

    public function exitVsLiteral(Context\VsLiteralContext $context): void
    {
    }

    public function enterVsEqv(Context\VsEqvContext $context): void
    {
    }

    public function exitVsEqv(Context\VsEqvContext $context): void
    {
    }

    public function enterVsNegation(Context\VsNegationContext $context): void
    {
    }

    public function exitVsNegation(Context\VsNegationContext $context): void
    {
    }

    public function enterVsImp(Context\VsImpContext $context): void
    {
    }

    public function exitVsImp(Context\VsImpContext $context): void
    {
    }

    public function enterVsMid(Context\VsMidContext $context): void
    {
    }

    public function exitVsMid(Context\VsMidContext $context): void
    {
    }

    public function enterVariableStmt(Context\VariableStmtContext $context): void
    {
    }

    public function exitVariableStmt(Context\VariableStmtContext $context): void
    {
    }

    public function enterVariableListStmt(Context\VariableListStmtContext $context): void
    {
    }

    public function exitVariableListStmt(Context\VariableListStmtContext $context): void
    {
    }

    public function enterVariableSubStmt(Context\VariableSubStmtContext $context): void
    {
    }

    public function exitVariableSubStmt(Context\VariableSubStmtContext $context): void
    {
    }

    public function enterWhileWendStmt(Context\WhileWendStmtContext $context): void
    {
    }

    public function exitWhileWendStmt(Context\WhileWendStmtContext $context): void
    {
    }

    public function enterWidthStmt(Context\WidthStmtContext $context): void
    {
    }

    public function exitWidthStmt(Context\WidthStmtContext $context): void
    {
    }

    public function enterWithStmt(Context\WithStmtContext $context): void
    {
    }

    public function exitWithStmt(Context\WithStmtContext $context): void
    {
    }

    public function enterWriteStmt(Context\WriteStmtContext $context): void
    {
    }

    public function exitWriteStmt(Context\WriteStmtContext $context): void
    {
    }

    public function enterFileNumber(Context\FileNumberContext $context): void
    {
    }

    public function exitFileNumber(Context\FileNumberContext $context): void
    {
    }

    public function enterExplicitCallStmt(Context\ExplicitCallStmtContext $context): void
    {
    }

    public function exitExplicitCallStmt(Context\ExplicitCallStmtContext $context): void
    {
    }

    public function enterECS_ProcedureCall(Context\ECS_ProcedureCallContext $context): void
    {
    }

    public function exitECS_ProcedureCall(Context\ECS_ProcedureCallContext $context): void
    {
    }

    public function enterECS_MemberProcedureCall(Context\ECS_MemberProcedureCallContext $context): void
    {
    }

    public function exitECS_MemberProcedureCall(Context\ECS_MemberProcedureCallContext $context): void
    {
    }

    public function enterImplicitCallStmt_InBlock(Context\ImplicitCallStmt_InBlockContext $context): void
    {
    }

    public function exitImplicitCallStmt_InBlock(Context\ImplicitCallStmt_InBlockContext $context): void
    {
    }

    public function enterICS_B_MemberProcedureCall(Context\ICS_B_MemberProcedureCallContext $context): void
    {
    }

    public function exitICS_B_MemberProcedureCall(Context\ICS_B_MemberProcedureCallContext $context): void
    {
    }

    public function enterICS_B_ProcedureCall(Context\ICS_B_ProcedureCallContext $context): void
    {
    }

    public function exitICS_B_ProcedureCall(Context\ICS_B_ProcedureCallContext $context): void
    {
    }

    public function enterImplicitCallStmt_InStmt(Context\ImplicitCallStmt_InStmtContext $context): void
    {
    }

    public function exitImplicitCallStmt_InStmt(Context\ImplicitCallStmt_InStmtContext $context): void
    {
    }

    public function enterICS_S_VariableOrProcedureCall(Context\ICS_S_VariableOrProcedureCallContext $context): void
    {
    }

    public function exitICS_S_VariableOrProcedureCall(Context\ICS_S_VariableOrProcedureCallContext $context): void
    {
    }

    public function enterICS_S_ProcedureOrArrayCall(Context\ICS_S_ProcedureOrArrayCallContext $context): void
    {
    }

    public function exitICS_S_ProcedureOrArrayCall(Context\ICS_S_ProcedureOrArrayCallContext $context): void
    {
    }

    public function enterICS_S_MembersCall(Context\ICS_S_MembersCallContext $context): void
    {
    }

    public function exitICS_S_MembersCall(Context\ICS_S_MembersCallContext $context): void
    {
    }

    public function enterICS_S_MemberCall(Context\ICS_S_MemberCallContext $context): void
    {
    }

    public function exitICS_S_MemberCall(Context\ICS_S_MemberCallContext $context): void
    {
    }

    public function enterICS_S_DictionaryCall(Context\ICS_S_DictionaryCallContext $context): void
    {
    }

    public function exitICS_S_DictionaryCall(Context\ICS_S_DictionaryCallContext $context): void
    {
    }

    public function enterArgsCall(Context\ArgsCallContext $context): void
    {
    }

    public function exitArgsCall(Context\ArgsCallContext $context): void
    {
    }

    public function enterArgCall(Context\ArgCallContext $context): void
    {
    }

    public function exitArgCall(Context\ArgCallContext $context): void
    {
    }

    public function enterDictionaryCallStmt(Context\DictionaryCallStmtContext $context): void
    {
    }

    public function exitDictionaryCallStmt(Context\DictionaryCallStmtContext $context): void
    {
    }

    public function enterArgList(Context\ArgListContext $context): void
    {
    }

    public function exitArgList(Context\ArgListContext $context): void
    {
    }

    public function enterArg(Context\ArgContext $context): void
    {
    }

    public function exitArg(Context\ArgContext $context): void
    {
    }

    public function enterArgDefaultValue(Context\ArgDefaultValueContext $context): void
    {
    }

    public function exitArgDefaultValue(Context\ArgDefaultValueContext $context): void
    {
    }

    public function enterSubscripts(Context\SubscriptsContext $context): void
    {
    }

    public function exitSubscripts(Context\SubscriptsContext $context): void
    {
    }

    public function enterSubscript_(Context\Subscript_Context $context): void
    {
    }

    public function exitSubscript_(Context\Subscript_Context $context): void
    {
    }

    public function enterAmbiguousIdentifier(Context\AmbiguousIdentifierContext $context): void
    {
    }

    public function exitAmbiguousIdentifier(Context\AmbiguousIdentifierContext $context): void
    {
    }

    public function enterAsTypeClause(Context\AsTypeClauseContext $context): void
    {
    }

    public function exitAsTypeClause(Context\AsTypeClauseContext $context): void
    {
    }

    public function enterBaseType(Context\BaseTypeContext $context): void
    {
    }

    public function exitBaseType(Context\BaseTypeContext $context): void
    {
    }

    public function enterCertainIdentifier(Context\CertainIdentifierContext $context): void
    {
    }

    public function exitCertainIdentifier(Context\CertainIdentifierContext $context): void
    {
    }

    public function enterComparisonOperator(Context\ComparisonOperatorContext $context): void
    {
    }

    public function exitComparisonOperator(Context\ComparisonOperatorContext $context): void
    {
    }

    public function enterComplexType(Context\ComplexTypeContext $context): void
    {
    }

    public function exitComplexType(Context\ComplexTypeContext $context): void
    {
    }

    public function enterFieldLength(Context\FieldLengthContext $context): void
    {
    }

    public function exitFieldLength(Context\FieldLengthContext $context): void
    {
    }

    public function enterLetterrange(Context\LetterrangeContext $context): void
    {
    }

    public function exitLetterrange(Context\LetterrangeContext $context): void
    {
    }

    public function enterLineLabel(Context\LineLabelContext $context): void
    {
    }

    public function exitLineLabel(Context\LineLabelContext $context): void
    {
    }

    public function enterLiteral(Context\LiteralContext $context): void
    {
    }

    public function exitLiteral(Context\LiteralContext $context): void
    {
    }

    public function enterType_(Context\Type_Context $context): void
    {
    }

    public function exitType_(Context\Type_Context $context): void
    {
    }

    public function enterTypeHint(Context\TypeHintContext $context): void
    {
    }

    public function exitTypeHint(Context\TypeHintContext $context): void
    {
    }

    public function enterVisibility(Context\VisibilityContext $context): void
    {
    }

    public function exitVisibility(Context\VisibilityContext $context): void
    {
    }

    public function enterAmbiguousKeyword(Context\AmbiguousKeywordContext $context): void
    {
    }

    public function exitAmbiguousKeyword(Context\AmbiguousKeywordContext $context): void
    {
    }

    public function enterRemComment(Context\RemCommentContext $context): void
    {
    }

    public function exitRemComment(Context\RemCommentContext $context): void
    {
    }

    public function enterComment(Context\CommentContext $context): void
    {
    }

    public function exitComment(Context\CommentContext $context): void
    {
    }

    public function enterEndOfLine(Context\EndOfLineContext $context): void
    {
    }

    public function exitEndOfLine(Context\EndOfLineContext $context): void
    {
    }

    public function enterEndOfStatement(Context\EndOfStatementContext $context): void
    {
    }

    public function exitEndOfStatement(Context\EndOfStatementContext $context): void
    {
    }
}
